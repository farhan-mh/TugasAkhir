<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         // Berbagi data dengan semua tampilan di folder 'shared'
         view()->composer('shared.header', function ($view) {
            $list = DB::table('show_kategoris')->where('id', '>','1')->get();
            $menu = DB::table('headers')->get();
            $footer = DB::table('footer_models')->get();
            $view->with(['list' => $list, 'menu' => $menu , 'footer' => $footer]);
        });
        view()->composer('shared.footer', function ($view) {
            
            $footer = DB::table('footer_models')->get();
            $view->with([ 'footer' => $footer]);
        });
        view()->composer('layouts.app', function ($view) {
            
            $menu = DB::table('headers')->get();
            $view->with([ 'menu' => $menu]);
        });
        paginator::useBootstrap();
    }
}
