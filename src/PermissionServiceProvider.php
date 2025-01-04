<?php

namespace Olive\Permission;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Olive\Permission\Http\Middleware\SpatiePermissionMiddleware;
use Livewire\Livewire;
use Olive\Permission\Livewire\Counter;
class PermissionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
        Route::as('permission.')  
        ->middleware('web')
        ->group(function () {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    });
        Livewire::component('counter', Counter::class);
        $this->loadViewsFrom(__DIR__ . '/../resources/assets/views', 'permission');

        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('spatie-permission', SpatiePermissionMiddleware::class);
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/assets' => public_path('permission'),
            ], 'assets');
            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
            
            $this->publishes([
                __DIR__.'/../config/permission.php' => config_path('permission.php'),
            ], 'permission-config');
        }
    }
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
   
}