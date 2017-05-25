<?php

namespace Loojas\Homepage\Applications\Providers;

use Illuminate\Support\ServiceProvider;
use Homepage\Domains\Models\User\UserRepositoryInterface;
use Homepage\Infrastructures\Domains\User\EloquentUserRepository;


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
