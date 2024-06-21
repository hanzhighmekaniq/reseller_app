<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $adminId = Auth::user()->id; // Mendapatkan ID admin yang sedang login
        $totalAnggota = User::where('role', 'anggota')->where('bos_id', $adminId)->count();
        $totalProducts = Product::count();
        $totalOrders = Order::count();
        $currentMonthSales = Order::whereMonth('created_at', Carbon::now()->month)->sum('total_price');

        return view('page.dashboardadmin', compact('totalAnggota', 'totalProducts', 'totalOrders', 'currentMonthSales'));
    }
}
