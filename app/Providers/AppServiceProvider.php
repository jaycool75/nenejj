<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use DB;

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
        //

        try {
            $categories = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category')
            ->select('products.category', 'categories.id', 'categories.name')
            ->groupBy('categories.id', 'categories.name', 'products.category')
            ->get();
            View::share('categories', $categories);
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }
}
