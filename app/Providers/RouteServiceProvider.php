<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapWebRoutes();
        $this->mapApiRoutes();
        $this->mapMyAccountRoutes();
        $this->mapDashboardRoutes();
        $this->mapPublicRoutes();
        $this->mapInstallRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {

        if( setting('is_frontend_public', true) ){
            Route::middleware('web')->namespace($this->namespace)->group(base_path('routes/localeWebRoutes.php'));
        } else {
            Route::middleware('web')->middleware('auth')->namespace($this->namespace)->group(base_path('routes/localeWebRoutes.php'));
        }
    }

    /**
     * Define the "install" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapInstallRoutes()
    {
        Route::prefix('install')
            ->middleware('install')
            ->namespace($this->namespace)
            ->group(base_path('routes/install.php'));
    }

    /**
     * Define the "public" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapPublicRoutes()
    {
        Route::middleware('public')
             ->namespace($this->namespace)
             ->group(base_path('routes/public.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    protected function mapDashboardRoutes()
    {
        Route::prefix(defaultSetting('dashboard_prefix', 'dashboard'))
            ->middleware('dashboard')
            ->namespace($this->namespace)
            ->group(base_path('routes/dashboard.php'));
    }

    protected function mapMyAccountRoutes()
    {
        Route::prefix('my_account')
            ->middleware('my_account')
            ->namespace($this->namespace)
            ->group(base_path('routes/my_account.php'));
    }
}
