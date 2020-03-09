<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Repositories\Category\CategoryInterface;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Order\OrderInterface;
use App\Repositories\Order\OrderRepository;
use App\Repositories\Order_product\Order_ProductInterface;
use App\Repositories\Order_product\Order_ProductRepository;
use Illuminate\Support\Facades\View;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(CategoryInterface::class, CategoryRepository::class);
        $this->app->singleton(OrderInterface::class, OrderRepository::class);
        $this->app->singleton(Order_ProductInterface::class,Order_ProductRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        View::share('cates', Category::all());
        Schema::defaultStringLength(191);
    }
}
