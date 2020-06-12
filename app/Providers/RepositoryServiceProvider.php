<?php

namespace App\Providers;

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
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\ProductRepository::class, \App\Repositories\ProductRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\BrandRepository::class, \App\Repositories\BrandRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\SliderRepository::class, \App\Repositories\SliderRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ArticleRepository::class, \App\Repositories\ArticleRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CategoryRepository::class, \App\Repositories\CategoryRepositoryEloquent::class);
        // $this->app->bind(\App\Repositories\BlogRepository::class, \App\Repositories\BlogRepositoryEloquent::class);
        // $this->app->bind(\App\Repositories\ProductPropertyRepository::class, \App\Repositories\ProductPropertyRepositoryEloquent::class);
        // $this->app->bind(\App\Repositories\ProductImageRepository::class, \App\Repositories\ProductImageRepositoryEloquent::class);
        // $this->app->bind(\App\Repositories\OrdersRepository::class, \App\Repositories\OrdersRepositoryEloquent::class);
        // $this->app->bind(\App\Repositories\AdviceCalendarRepository::class, \App\Repositories\AdviceCalendarRepositoryEloquent::class);
        // $this->app->bind(\App\Repositories\ProductDeliveryCustomerRepository::class, \App\Repositories\ProductDeliveryCustomerRepositoryEloquent::class);
        // $this->app->bind(\App\Repositories\SupportOnlineRepository::class, \App\Repositories\SupportOnlineRepositoryEloquent::class);
        // $this->app->bind(\App\Repositories\PagesRepository::class, \App\Repositories\PagesRepositoryEloquent::class);
        // $this->app->bind(\App\Repositories\ConfigsRepository::class, \App\Repositories\ConfigsRepositoryEloquent::class);
        // $this->app->bind(\App\Repositories\AddressRepository::class, \App\Repositories\AddressRepositoryEloquent::class);
        //:end-bindings:
    }
}
