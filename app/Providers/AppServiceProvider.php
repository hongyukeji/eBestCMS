<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //\Illuminate\Support\Facades\Schema::defaultStringLength(191);
        Carbon::setLocale('zh');
        view()->share('siteConfig', 'info');

        view()->composer(['layouts.app', 'components.category', 'article.create'], function ($view) {
            $view->with('category', Category::all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
