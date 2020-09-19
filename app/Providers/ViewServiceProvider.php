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
        $categories = Category::all();
        $chemistry = $categories->find(1);
        $engine = $categories->find(2);
        $settings = Setting::get();

        View::share([
            'engine' => $engine,
            'chemistry' => $chemistry,
            'settings' => $settings,
            'categories' => $categories,
        ]);
    }
}
