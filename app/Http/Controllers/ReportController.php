<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Product;
use Carbon\Carbon;
use Auth;

class ReportController extends Controller
{
    public function createAnggota()
    {
        $products = Product::all();
        return view('page.buatlaporananggota', compact('products'));
    }

    public function storeAnggota(Request $request)
    {
        $request->validate([
            'total_sales' => 'required|integer',
            'products.*.product_id' => 'required|integer|exists:products,id',
            'products.*.sold' => 'required|integer',
            'products.*.return' => 'required|integer',
        ]);
    
        $totalSoldAndReturn = 0;
        foreach ($request->products as $productData) {
            $totalSoldAndReturn += $productData['sold'] + $productData['return'];
        }
    
        if ($totalSoldAndReturn !== $request->total_sales) {
            return redirect()->back()->with('error', 'Jumlah sold dan return tidak sesuai dengan total barang yang dibawa.');
        }
    
        foreach ($request->products as $productData) {
            $product = Product::find($productData['product_id']);
            $profit = $productData['sold'] * 500;
            $payment = ($product->original_price - 500) * $productData['sold'];
    
            Report::create([
                'user_id' => Auth::id(),
                'reseller1_id' => Auth::user()->bos_id, // Mendapatkan bos_id dari user yang sedang login
                'total_sales' => $request->total_sales,
                'sold' => $productData['sold'],
                'return' => $productData['return'],
                'payment' => $payment,
                'profit' => $profit,
            ]);
        }
    
        return redirect()->route('reports.indexAnggota')->with('success', 'Laporan berhasil ditambahkan.');
    }
    
    
    

    public function indexAnggota()
    {
        $reports = Report::where('user_id', Auth::id())->get();
        return view('page.datapenjualananggota', compact('reports'));
    }

    public function createAdmin()
    {
        $products = Product::all();
        return view('page.buatlaporanadmin', compact('products'));
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'total_sales' => 'required|integer',
            'products.*.product_id' => 'required|integer|exists:products,id',
            'products.*.sold' => 'required|integer',
            'products.*.return' => 'required|integer',
        ]);

        $totalSoldAndReturn = 0;
        foreach ($request->products as $productData) {
            $totalSoldAndReturn += $productData['sold'] + $productData['return'];
        }

        if ($totalSoldAndReturn !== $request->total_sales) {
            return redirect()->back()->with('error', 'Jumlah sold dan return tidak sesuai dengan total barang yang dibawa.');
        }

        $adminProfit = 0;
        $adminPayment = 0;

        foreach ($request->products as $productData) {
            $product = Product::find($productData['product_id']);
            $profit = $productData['sold'] * 500;
            $payment = ($product->original_price - 500) * $productData['sold'];

            Report::create([
                'user_id' => Auth::id(),
                'reseller1_id' => Auth::id(), // reseller1_id diisi dengan ID admin yang sedang login
                'total_sales' => $request->total_sales,
                'sold' => $productData['sold'],
                'return' => $productData['return'],
                'payment' => $payment,
                'profit' => $profit,
            ]);

            $adminProfit += $profit;
            $adminPayment += $payment;
        }

        // Tambahkan profit dan payment anggota ke profit dan payment admin
        $anggotaReports = Report::where('reseller1_id', Auth::id())->get();
        foreach ($anggotaReports as $report) {
            $adminProfit += $report->profit;
            $adminPayment += $report->payment;
        }

        return redirect()->route('reports.indexAdmin')->with('success', 'Laporan berhasil ditambahkan.');
    }

    

    public function indexAdmin()
    {
        $reports = Report::where('user_id', Auth::id())->get();
        return view('page.datapenjualanadmin', compact('reports'));
    }
    

    public function show($type)
    {
        $user = Auth::user();
        $reportsData = [];

        if ($type == 'today') {
            $reportsData = $this->getReportsByDate($user, 'today');
        } elseif ($type == 'month') {
            $reportsData = $this->getReportsByDate($user, 'month');
        } elseif ($type == 'year') {
            $reportsData = $this->getReportsByDate($user, 'year');
        }

        return view('page.report', $reportsData);
    }

    private function getReportsByRole($user)
    {
        $today = Carbon::today();
        $thisMonth = Carbon::now()->month;
        $thisYear = Carbon::now()->year;

        if ($user->role == 'pemilik') {
            $reports = Report::whereDate('created_at', $today)->get();
        } elseif ($user->role == 'bos') {
            $reports = Report::where('user_id', $user->id)->whereDate('created_at', $today)->get();
        } else {
            $reports = Report::where('user_id', $user->id)->whereDate('created_at', $today)->get();
        }

        $totalProfit = $reports->sum('profit');
        $totalReturn = $reports->sum('return');

        return compact('reports', 'totalProfit', 'totalReturn');
    }

    private function getReportsByDate($user, $period)
    {
        $query = Report::query();

        if ($user->role != 'pemilik') {
            $query->where('user_id', $user->id);
        }

        if ($period == 'today') {
            $query->whereDate('created_at', Carbon::today());
        } elseif ($period == 'month') {
            $query->whereMonth('created_at', Carbon::now()->month);
        } elseif ($period == 'year') {
            $query->whereYear('created_at', Carbon::now()->year);
        }

        $reports = $query->get();
        $totalProfit = $reports->sum('profit');
        $totalReturn = $reports->sum('return');

        return compact('reports', 'totalProfit', 'totalReturn');
    }
}
