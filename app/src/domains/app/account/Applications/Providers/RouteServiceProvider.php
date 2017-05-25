<?php

namespace Loojas\Account\Applications\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;


class RouteServiceProvider extends ServiceProvider
{


    protected $namespace = 'Loojas\Account\Applications\Http\Controllers';


    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->mapAutheticateRoutes();
        $this->mapEmailRoutes();
        $this->mapInvitationRoutes();
        $this->mapLockRoutes();    
        
        $this->mapRecoverRoutes();
        $this->mapRegisterRoutes();
        $this->mapResetRoutes();
        
        $this->loadViewsFrom(__DIR__.'/../../Presentations/resources/views', 'account');


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
     * Define the "login" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapAutheticateRoutes()
    {

        Route::prefix('/')
            ->domain(env('APP_URL'))
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('app/src/domains/app/account/Applications/routes/autheticate.php'));

    }
    

    /**
     * Define the "email" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapEmailRoutes()
    {

        Route::prefix('/email-confirmar')
            ->domain(env('APP_URL'))
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('app/src/domains/app/account/Applications/routes/email.php'));

    }

    /**
     * Define the "invitation" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapInvitationRoutes()
    {

        Route::prefix('/convite')
            ->domain(env('APP_URL'))
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('app/src/domains/app/account/Applications/routes/invitation.php'));

    }

    /**
     * Define the "lock" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapLockRoutes()
    {

        Route::prefix('/bloqueado')
            ->domain(env('APP_URL'))
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('app/src/domains/app/account/Applications/routes/lock.php'));

    }   


    /**
     * Define the "recover" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapRecoverRoutes()
    {

        Route::prefix('/recuperar-senha')
            ->domain(env('APP_URL'))
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('app/src/domains/app/account/Applications/routes/recover.php'));

    }

    /**
     * Define the "register" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapRegisterRoutes()
    {

        Route::prefix('/registrar')
            ->domain(env('APP_URL'))
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('app/src/domains/app/account/Applications/routes/register.php'));

    }

    /**
     * Define the "reset" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapResetRoutes()
    {

        Route::prefix('/senha-redefinir')
            ->domain(env('APP_URL'))
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('app/src/domains/app/account/Applications/routes/reset.php'));

    }

}
