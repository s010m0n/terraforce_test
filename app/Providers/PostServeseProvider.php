<?php

namespace App\Providers;

use App\Contracts\Repositories\PostRepositoryContract;
use App\Contracts\Services\PostServiceContract;
use App\Repositories\PostRepository;
use App\Services\PostService;
use Illuminate\Support\ServiceProvider;

class PostServeseProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerContracts();
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

    /**
     * @return void
     */
    protected function registerContracts(): void
    {
        $this->app->singleton(PostRepositoryContract::class,PostRepository::class);
        $this->app->singleton(PostServiceContract::class,PostService::class);
    }
}
