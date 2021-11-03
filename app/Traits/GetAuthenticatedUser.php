<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Arr;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;
use App\Http\Utils\SystemParam;
trait GetAuthenticatedUser
{

    /**
     * Parse response format
     *
     * @param  array $data
     * @param  string $statusCode
     * @return JsonResponse
     */
    public function getAuthenticatedUser()
    {
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return null;
            }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return null;
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return null;
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
            return null;
        }
        return $user;
    }
}
