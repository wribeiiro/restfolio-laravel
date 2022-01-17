<?php

namespace App\Providers;

use App\Repositories\Contracts\{
    ProfileRepositoryInterface
};

use App\Repositories\{
    ProfileRepository
};

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ProfileRepositoryInterface::class,
            ProfileRepository::class,
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
