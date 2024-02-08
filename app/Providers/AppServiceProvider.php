<?php

namespace App\Providers;

use App\Cart\Cart;
use App\Cart\CinetPay;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(CinetPay::class, fn() => new CinetPay( "5867180", "1618973231659ee5754bd7a2.44701477"));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
