<?php

namespace Sham\ProfileEnhancer;

use Illuminate\Support\ServiceProvider;

class ProfileEnhancerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       // $this->mergeConfigFrom(__DIR__.'/config/profileenhancer.php', 'profileenhancer');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/views','profileenhancer');

//        $this->mergeConfigFrom(__DIR__.'/config/profileenhancer.php', 'profileenhancer');

        // publish view & config for user to modify
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/profileenhancer'),
            __DIR__.'/config/profileenhancer.php' => config_path('profileenhancer.php')
    ]);



    }
}
