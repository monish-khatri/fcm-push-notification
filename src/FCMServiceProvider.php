<?php

namespace MonishKhatri\FCM;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class FCMServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Kernel $kernel)
    {
        // Merge and publish config file
        $this->publishes([
            __DIR__ . '/../stubs/config/fcm.php' => config_path('fcm.php'),
        ], 'config');

        $this->registerPolicies();
    }
}
