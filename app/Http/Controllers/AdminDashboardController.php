<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalAdmins = User::where('role', 'admin')->count();
        $totalProducts = Product::count();
        $totalOrders = Order::count();
        $currentMonthSales = Order::whereMonth('created_at', Carbon::now()->month)->sum('total_price');

        return view('page.dashboardadmin', compact('totalAdmins', 'totalProducts', 'totalOrders', 'currentMonthSales'));
    }
}
