<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use View;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        View::share('name','BITM');
//        View::share('categories', Category::all());
        View::composer('front.includes.header',function ($view){
            $view->with('categories' , Category::all());
        });

        View::composer(['front.includes.footer', 'front.includes.meta'], function ($view){
            $view->with('brands', Brand::all());
            $view->with('brands', Category::all());
            $view->with('brands', Product::all());
        });
    }
}
