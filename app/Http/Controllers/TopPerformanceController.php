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
 
        $anggotaIds = User::where('role', 'anggota')->pluck('id')->toArray();
        
        // Ambil data total sold dan total_sales dari report bulan ini untuk setiap anggota
        $topPerformancesAnggota = DB::table('reports')
            ->select('user_id', DB::raw('SUM(sold) as total_sold'), DB::raw('SUM(total_sales) as total_sales'), DB::raw('MIN(created_at) as earliest_report'))
            ->whereIn('user_id', $anggotaIds)
            ->whereMonth('created_at', now()->month)
            ->groupBy('user_id')
            ->get()
            ->map(function ($performance) {
                $performance->performance = ($performance->total_sold / $performance->total_sales) * 100;
                return $performance;
            })
            ->sortByDesc('performance')
            ->sortBy('earliest_report');

        // Ambil data user dengan peran 'anggota'
        $usersAnggota = User::whereIn('id', $anggotaIds)
                            ->where('role', 'anggota')
                            ->select('id', 'name', 'role')
                            ->get();

        // Ambil user_id dari users dengan role bos atau admin
        $koordinatorIds = User::whereIn('role', ['bos', 'admin'])->pluck('id')->toArray();

        // Ambil data total sold dan total_sales dari report bulan ini untuk setiap koordinator
        $topPerformancesKoordinator = DB::table('reports')
            ->select('user_id', DB::raw('SUM(sold) as total_sold'), DB::raw('SUM(total_sales) as total_sales'), DB::raw('MIN(created_at) as earliest_report'))
            ->whereIn('user_id', $koordinatorIds)
            ->whereMonth('created_at', now()->month)
            ->groupBy('user_id')
            ->get()
            ->map(function ($performance) {
                $performance->performance = ($performance->total_sold / $performance->total_sales) * 100;
                return $performance;
            })
            ->sortByDesc('performance')
            ->sortBy('earliest_report');

        // Ambil data user dengan peran 'bos' atau 'admin'
        $usersKoordinator = User::whereIn('id', $koordinatorIds)
                                ->whereIn('role', ['bos', 'admin'])
                                ->select('id', 'name', 'role')
                                ->get();

        return view('page.topperformance', compact('topPerformancesAnggota', 'usersAnggota', 'topPerformancesKoordinator', 'usersKoordinator'));
    }
}
