<?php

namespace App\Exceptions;

use App\Http\Components\Setting;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }


    public function unauthenticated($request, AuthenticationException $exception)
    {
        $app_response = [
            'success'   => false,
            'message'   => Setting::$login_failed_message,
            'data'      => null
        ];

        if ($request->expectsJson()) {
            return response()->json(
                $app_response,
                401
            );
        }

        if ($request->hasHeader('Authorization')) {
            return response()->json(
                $app_response,
                401
            );
        }

        return redirect()->guest(route('login'));
    }
}
