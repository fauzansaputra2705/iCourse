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
        if (Auth::check() && Auth::user()->level == 'siswa') {
            return redirect()->route('siswa');
        }
        elseif (Auth::check() && Auth::user()->level == 'guru') {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->level == 'sekolah') {
            return redirect()->route('sekolah');
        }
        elseif (Auth::check() && Auth::user()->level == 'admin') {
            return redirect()->route('admin');
        }
        else {
            return redirect()->route('login');
        }
    }
}
