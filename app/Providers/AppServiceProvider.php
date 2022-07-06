<?php

namespace App\Providers;

use App\Views\LayoutViewComposer;
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
        $this->app->make('view')->composer(
            [
                'layouts/main',
                'controllers.*',
            ]
            , LayoutViewComposer::class);
    }
}
