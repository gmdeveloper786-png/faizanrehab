<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Configure rate limiter for contact form (IP based only)
        RateLimiter::for('contact-form', function (Request $request) {
            // Create unique key based on IP address only
            $key = 'contact-form:' . $request->ip();

            return Limit::perMinute(1)->by($key);
        });

        // Configure rate limiter for appointment form (IP based only)
        RateLimiter::for('appointment-form', function (Request $request) {
            // Create unique key based on IP address only
            $key = 'appointment-form:' . $request->ip();

            return Limit::perMinute(1)->by($key);
        });

        // ngrok
        if (request()->header('x-forwarded-proto') === 'https') {
            URL::forceScheme('https');
        }
    }
}
