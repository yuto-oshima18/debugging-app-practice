<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


use Illuminate\Support\Facades\Log;

class UserCreateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('ユーザを作成します',['data' => $request -> all()]);
        $response = $next($request);
        Log::info('ユーザを作成しました',['data' => $response -> getStatusCode()]);
        return $response;
    }
}
