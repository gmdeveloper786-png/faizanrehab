<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $e
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $e)
    {
        // Handle rate limiting for AJAX requests
        if ($e instanceof ThrottleRequestsException && $request->expectsJson()) {
            $retryAfter = $e->getHeaders()['Retry-After'] ?? 60;
            $seconds = $retryAfter;
            $minutes = ceil($seconds / 60);
            
            return response()->json([
                'success' => false,
                'message' => "Too many requests. Please wait {$minutes} minute(s) before submitting again.",
                'retry_after' => $seconds
            ], 429);
        }

        return parent::render($request, $e);
    }
}
