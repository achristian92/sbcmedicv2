<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
        if (App::environment('production')) {
            URL::forceScheme('https');
        }

        Carbon::setLocale(config('app.locale'));

        Paginator::useBootstrapFive();

        \Illuminate\Support\Facades\View::composer('*', function (View $view) {
            $data = [];
            if(Auth::check()) {
                $user = Auth::user();
                $patient = $user->patient;
                $rol = $user->rol;
                $data = [
                    'first_name'  => ucfirst(strtolower($patient->firstname)),
                    'last_name'   => ucfirst(strtolower($patient->lastname)),
                    'rol'         => ucfirst(strtolower($rol->descripcion)),
                    'permissions' => $rol->permissions
                ];
            }

            $view->with('user', $data);
        });
    }
}
