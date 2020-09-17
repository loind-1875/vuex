<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Setting;

class ViewServiceProvider extends ServiceProvider
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
        $chemistry = Category::find(2);
        $engine = Category::find(1);
        $settings = Setting::get();

        View::share([
            'engine' => $engine,
            'chemistry' => $chemistry,
            'settings' => $settings
        ]);
    }
}