<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Report;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PemilikDashboardController extends Controller
{
    public function index()
    {
        $totalAdmins = User::where('role', 'bos')->count();
        $totalProducts = Product::count();
        
        // Total Orders adalah sum dari sold dari semua bos
        $totalOrders = Report::whereIn('user_id', User::where('role', 'bos')->pluck('id'))
                              ->sum('sold');

        // Current Month Sales adalah sum dari profit dari semua bos
        $currentMonthSales = Report::whereIn('user_id', User::where('role', 'bos')->pluck('id'))
                                    ->whereMonth('created_at', Carbon::now()->month)
                                    ->sum('profit');

        // Data untuk grafik performa minggu ini
        $performanceThisWeek = Report::select(DB::raw('SUM(sold) as total_sold'), DB::raw('DATE(created_at) as date'))
                                     ->whereIn('user_id', User::where('role', 'bos')->pluck('id'))
                                     ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                                     ->groupBy('date')
                                     ->get()
                                     ->toArray();

        return view('page.dashboardpemilik', compact('totalAdmins', 'totalProducts', 'totalOrders', 'currentMonthSales', 'performanceThisWeek'));
    }
}
