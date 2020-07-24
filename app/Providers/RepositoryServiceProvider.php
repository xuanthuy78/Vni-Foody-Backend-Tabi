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
        $this->app->bind(\App\Repositories\ArticleCategoryRepository::class, \App\Repositories\ArticleCategoryRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CategoryRepository::class, \App\Repositories\CategoryRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\ProductImageRepository::class, \App\Repositories\ProductImageRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\OrdersRepository::class, \App\Repositories\OrdersRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\OrderDetailRepository::class, \App\Repositories\OrderDetailRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserRepository::class, \App\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\CommentRepository::class, \App\Repositories\CommentRepositoryEloquent::class);
    }
}
