<?php

namespace App\Providers;

use App\Http\Repositories\Categories\CategoryEloquentRepository;
use App\Http\Repositories\Categories\CategoryInterfaceRepository;
use App\Http\Repositories\Products\ProductInterfaceRepository;
use App\Http\Repositories\Products\ProductEloquentRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(ProductInterfaceRepository::class,ProductEloquentRepository::class);
        $this->app->bind(CategoryInterfaceRepository::class,CategoryEloquentRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
