<?php

namespace App\Http\Middleware; // Harus ada 'Http' di sini

use Closure;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class DesktopOnly
{
    public function handle(Request $request, Closure $next)
    {
        $agent = new Agent();

        // Jika akses dari perangkat mobile, arahkan ke warning page
        if ($agent->isMobile() || $agent->isTablet()) {
            return response()->view('warning'); // Pastikan ada file resources/views/warning.blade.php
        }

        return $next($request);
    }
}
