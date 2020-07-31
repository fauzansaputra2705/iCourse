<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->level == 'siswa') {
            return redirect()->route('siswa');
        }
        elseif (Auth::check() && Auth::user()->level == 'guru') {
            return redirect()->route('guru');
        }
        elseif (Auth::check() && Auth::user()->level == 'sekolah') {
            return redirect()->route('sekolah');
        }
        elseif (Auth::check() && Auth::user()->level == 'admin') {
            return $next($request);
        }
        else {
            return redirect()->route('login');
        }
    }
}
