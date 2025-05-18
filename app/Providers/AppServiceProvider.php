<?php

namespace App\Providers;

use App\Models\Genre;
use Illuminate\Support\Facades;
use Illuminate\View\View;
use Illuminate\Support\ServiceProvider;

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
        Facades\View::composer('navbar', function (View $view): void
        {
            $view->with('genres', Genre::limit(10)->get());
        });
    }
}
