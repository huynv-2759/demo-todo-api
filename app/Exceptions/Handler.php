<?php

namespace App\Exceptions;
use App\Traits\ApiResponse;
use Exception;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;
use Throwable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof ValidationException) {
            $errors = $exception->errors();
            if (!empty($errors) && is_array($errors)) {
                return response()->json([
                    'status' => 0,
                    'code' => $exception->getCode(),
                    'message' => array_values($errors)[0][1] ?? array_values($errors)[0][0],
                    'data' => null
                ]);
            }
        }
        if($exception instanceof NotFoundHttpException)
        {
            return response()->json([
                'status' => 0,
                'code' => 404,
                'message' => 'Not found',
                'data' => null
            ]);
        }
        if($exception instanceof ModelNotFoundException)
        {
            return response()->json([
                'status' => 0,
                'code' => 404,
                'message' => 'Không tìm thấy dữ liệu',
                'data' => null
            ]);
        }
        if($exception instanceof MethodNotAllowedHttpException)
        {
            return response()->json([
                'status' => 0,
                'code' => 405,
                'message' => $exception->getMessage(),
                'data' => null
            ]);
        }
        return response()->json([
            'status' => 0,
            'code' => $exception->getCode(),
            'message' => $exception->getMessage(),
            'data' => null
        ]);
        // return parent::render($request, $exception);
    }
}
