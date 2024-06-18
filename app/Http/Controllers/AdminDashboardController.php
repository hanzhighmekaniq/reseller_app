<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;


class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalAnggota = User::where('role', 'anggota')->count();
        $totalProducts = Product::count();
        $totalOrders = Order::count();
        $currentMonthSales = Order::whereMonth('created_at', Carbon::now()->month)->sum('total_price');

        return view('page.dashboardadmin', compact('totalAnggota', 'totalProducts', 'totalOrders', 'currentMonthSales'));
    }
}
