<?php

namespace Loojas\Wizard\Applications\Providers;

use Illuminate\Support\ServiceProvider;
use Loojas\Wizard\Domains\Models\User\UserRepositoryInterface;
use Loojas\Wizard\Infrastructures\Domains\User\EloquentUserRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, EloquentUserRepository::class);
    }
}
