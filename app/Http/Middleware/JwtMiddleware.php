<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use App\Http\Utils\SystemParam;
use ApiResponse;

class JwtMiddleware
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
        try {
            $user = JWTAuth::parseToken()->authenticate();
            if ($user->status == 2) {
                return response()->json([
                    'status' => 0,
                    'code' => 502,
                    'message' => 'Tài khoản của bạn đã bị khóa.',
                    'data' => null
                ]);
            }
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
                return response()->json([
                    'status' => 0,
                    'code' => 502,
                    'message' => 'Token không hợp lệ',
                    'data' => null
                ]);
            } else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
                return response()->json([
                    'status' => 0,
                    'code' => 502,
                    'message' => 'Token đã hết hạn',
                    'data' => null
                ]);
            } else {
                return response()->json([
                    'status' => 0,
                    'code' => 502,
                    'message' => 'Không tìm thấy token',
                    'data' => null
                ]);
            }
        }
        return $next($request);
    }
}
