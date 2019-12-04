<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Siswa
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
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 'guru') {
            return redirect()->route('guru');
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
