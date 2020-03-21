<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Repositories\User\UserInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\Category\CategoryInterface;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Product\ProductInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Supplier\SupplierInterface;
use App\Repositories\Supplier\SupplierRepository;
use App\Repositories\Order\OrderInterface;
use App\Repositories\Order\OrderRepository;
use App\Repositories\Order_product\Order_ProductInterface;
use App\Repositories\Order_product\Order_ProductRepository;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\User;
use App\Models\Supplier;
use App\Models\Order;
use App\Models\Product;


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
        $this->app->singleton(UserInterface::class, UserRepository::class);
        $this->app->singleton(CategoryInterface::class, CategoryRepository::class);
        $this->app->singleton(SupplierInterface::class, SupplierRepository::class);
        $this->app->singleton(ProductInterface::class, ProductRepository::class);
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

        View::share('pros', Product::all());
        Schema::defaultStringLength(191);

        // View::share('subcates', Category::where('parent_id', 0));
        // Schema::defaultStringLength(191);

        View::share('sups', Supplier::all());
        Schema::defaultStringLength(191);

        View::share('orders', Order::all());
        Schema::defaultStringLength(191);

        View::share('users', User::all());
        Schema::defaultStringLength(191);
    }
}
