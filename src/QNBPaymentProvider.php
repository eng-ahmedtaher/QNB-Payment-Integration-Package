<?php

namespace Payments\QNBPayment\Providers;

use Payments\QNBPayment\Providers\Facades\QNBPayment;
use Illuminate\Support\ServiceProvider;

class QNBPaymentProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Payments\QNBPayment\Providers\Facades\QNBPayment');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (!file_exists(base_path('config') . "/BankPayment.php")) {
            $this->publishes([__DIR__ . "/config" => base_path('config')]);
        }
    }
}
