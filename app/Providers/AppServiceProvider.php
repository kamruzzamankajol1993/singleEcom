<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
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
        $seoInfoIcon = DB::table('seos')->value('icon');
        $seoInfoTitle = DB::table('seos')->value('title');

        view()->share('seoInfoTitle', $seoInfoTitle);
        view()->share('seoInfoIcon', $seoInfoIcon);
        // view()->share('cartCollection1', $cartCollection1);
    }
}
