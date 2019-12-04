<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Guru
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
        if (Auth::check() && Auth::user()->role == 'siswa') {
            return redirect()->route('siswa');
        }
        elseif (Auth::check() && Auth::user()->role == 'guru') {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 'sekolah') {
            return redirect()->route('sekolah');
        }
        elseif (Auth::check() && Auth::user()->role == 'admin') {
            return redirect()->route('admin');
        }
        else {
            return redirect()->route('login');
        }
    }
}
