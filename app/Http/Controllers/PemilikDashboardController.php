<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;

class PemilikDashboardController extends Controller
{
    public function index()
    {
        $totalAdmins = User::where('role', 'bos')->count();
        $totalProducts = Product::count();
        $totalOrders = Order::count();
        $currentMonthSales = Order::whereMonth('created_at', Carbon::now()->month)->sum('total_price');

        return view('page.dashboardpemilik', compact('totalAdmins', 'totalProducts', 'totalOrders', 'currentMonthSales'));
    }
}
