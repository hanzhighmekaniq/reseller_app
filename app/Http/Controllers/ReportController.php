<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Carbon\Carbon;
use Auth;

class ReportController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $reportsData = $this->getReportsByRole($user);

        return view('page.report', $reportsData);
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
