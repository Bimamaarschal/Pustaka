<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TimeoutMiddleware
{
    public function handle($request, Closure $next)
    {
        $timeout                = 10;
        $startExecutionTime     = time();
        $response               = $next($request);
        $executionTime          = time() - $startExecutionTime;

                if ($executionTime > $timeout) {
                    View::getFinder()->flush();
                    return response()->view('errors.500', [], 500);
                }

        return $response;
    }
}
