<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('success', function ($payload = [], $status = 200) {
            return Response::json([
                'hasError'  => false,
                'error' => $payload['error'] ?? '',
                'message' => $payload['message'] ?? '',
                'data' => $payload['data'] ?? []
            ], $status);
        });

        Response::macro('error', function ($payload = [], $status = 500) {
            return Response::json([
                'hasError'  => true,
                'error' => $payload['error'] ?? '',
                'message' => $payload['message'] ?? '',
                'data' => $payload['data'] ?? []
            ], $status);
        });
    }
}
