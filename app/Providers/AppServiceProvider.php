<?php

namespace App\Providers;


use App\Repositories\Categories\CategoryEloquentRepository;
use App\Repositories\Categories\CategoryInterfaceRepository;
use App\Repositories\Products\ProductEloquentRepository;
use App\Repositories\Products\ProductInterfaceRepository;
use App\Services\Products\ProductInterfaceService;
use App\Services\Products\ProductService;
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
        if(env('REDIRECT_HTTPS')) {
            $this->app['request']->server->set('HTTPS', true);
        }
        $this->app->bind(ProductInterfaceRepository::class,ProductEloquentRepository::class);
        $this->app->bind(CategoryInterfaceRepository::class,CategoryEloquentRepository::class);
        $this->app->bind(ProductInterfaceService::class,ProductService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
        if(env('REDIRECT_HTTPS')) {
            $url->formatScheme('https');
        }
    }
}
