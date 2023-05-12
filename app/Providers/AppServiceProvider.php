<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['admin.*'], function ($view){
            $view->with('category', \App\Models\Category::all());
            // promo
            $view->with('promo', \App\Models\Promo::all());

         });
           
            
    } 
}
