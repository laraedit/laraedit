<?php

namespace LaraEdit;

use Illuminate\Support\ServiceProvider;

class LaraEditServiceProvider extends ServiceProvider
{

    public function register()
    {
        
    }

    public function boot()
    {
    	$this->publishes([
        	__DIR__ . '/../public' => public_path('vendor/laraedit'),
    	], 'public');

    	$this->publishes([
        	__DIR__ . '/../views' => base_path('resources/views/vendor/laraedit'),
    	], 'views');

        if (! $this->app->routesAreCached()) {
            require __DIR__ . '/routes.php';
        }
    }

}