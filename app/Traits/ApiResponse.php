<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Arr;

trait ApiResponse
{

    /**
     * Parse response format
     *
     * @param  array $data
     * @param  string $statusCode
     * @return JsonResponse
     */
    public function responseApi($status, $code, $message, $data): JsonResponse
    {
        return response()->json([
            'status' => $status,
            'code' => $code,
            'message' => $message,
            'data' => $data
        ]);
    }
}
