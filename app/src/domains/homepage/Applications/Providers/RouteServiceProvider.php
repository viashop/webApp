<?php

namespace Homepage\Applications\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;


class RouteServiceProvider extends ServiceProvider
{

    protected $namespace = 'Homepage\Applications\Http\Controllers';


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->mapWebRoutes();
        $this->loadViewsFrom(__DIR__.'/../../Presentations/resources/views', 'homepage');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    /**
     * Define the "web" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::prefix('/')
            ->domain(env('APP_HOMEPAGE', ''))
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('app/src/domains/homepage/Applications/routes/web.php'));
    }

}
