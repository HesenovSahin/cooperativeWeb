<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use App\Models\Service;



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

        view()->composer(
            'frontend.pages.service',
            function ($view) {
                $services=Service::get();
                $view->with('services', $services);
            }
        );
        // Paginator::defaultView('pagination::bootstrap-4'); // use bootstrap 4 style
        // Paginator::defaultSimpleView('pagination::simple-bootstrap-4');


    }
}
