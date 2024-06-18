<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TopPerformanceController extends Controller
{
    public function index()
    {
        // Ambil data total sales (sum) dari report bulan ini untuk setiap anggota
        $topPerformances = DB::table('reports')
            ->select('user_id', DB::raw('SUM(total_sales) as total_sales'), DB::raw('MIN(created_at) as first_report_time'))
            ->whereMonth('created_at', now()->month)
            ->groupBy('user_id')
            ->orderByDesc('total_sales')
            ->get();

        // Ambil data user dengan peran 'anggota' 
        $userIds = $topPerformances->pluck('user_id')->toArray();
        $users = User::whereIn('id', $userIds)
                    ->where('role', 'anggota')
                    ->select('id', 'name', 'role')
                    ->get();

        return view('page.topperformance', compact('topPerformances', 'users'));
    }
}
