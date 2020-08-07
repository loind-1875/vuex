<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;
use DB;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $chemistry = Category::find(2);
        $engine = Category::find(1);

        \View::share('engine', $engine);
        \View::share('chemistry', $chemistry);
    }
}
