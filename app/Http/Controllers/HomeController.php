<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'pemilik') {
            return redirect()->route('dashboard.pemilik');
        } elseif ($user->role === 'admin') {
            return redirect()->route('dashboard.admin');
        } elseif ($user->role === 'anggota') {
            return redirect()->route('dashboard.anggota');
        }

        return view('home');
    }
}
