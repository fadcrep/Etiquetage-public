<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        Blade::if('admin', function () {
            if (auth()->user() && auth()->user()->roles->first()->name =='admin') {
                return 1;
            }
            return 0;
        });

        Blade::if('aberme', function () {
            if (auth()->user() && (auth()->user()->roles->first()->name =='admin' || auth()->user()->roles->first()->name =='aberme')) {
                return 1;
            }
            return 0;
        });

        Blade::if('labo', function () {
            if (auth()->user() && (auth()->user()->roles->first()->name =='labo')) {
                return 1;
            }
            return 0;
        });

        Blade::if('inspecteur', function () {
            if (auth()->user() && auth()->user()->roles->first()->name =='inspecteur') {
                return 1;
            }
            return 0;
        });

    }
}
