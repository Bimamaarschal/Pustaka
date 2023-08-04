<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

class TimeoutMiddleware
{
    public function handle($request, Closure $next)
    {
        $timeout = 10;

        // Set batas waktu eksekusi skrip PHP
        set_time_limit($timeout + 1);

        try {
            $response = $next($request);
        } catch (\Exception $e) {
            // Tangkap Exception dan keluarkan tampilan yang sesuai
            return response()->view('errors.500', [], 500);
        }

        return $response;
    }
}
