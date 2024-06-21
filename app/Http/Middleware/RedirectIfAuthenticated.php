<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role == 'pemilik') {
                return redirect('/dashboard/pemilik');
            } elseif ($user->role == 'bos') {
                return redirect('/dashboard/admin');
            } elseif ($user->role == 'anggota') {
                return redirect('/dashboard/anggota');
            }
        }

        return $next($request);
    }
}
