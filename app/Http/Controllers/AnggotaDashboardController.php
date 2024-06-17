<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AnggotaDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = auth()->user()->id;

        // Hitung total sales dan total orders
        $totalSales = Order::where('user_id', $userId)->sum('total_price');
        $totalOrders = Order::where('user_id', $userId)->count();

        return view('page.dashboardanggota', compact('totalSales', 'totalOrders'));
    }
}
