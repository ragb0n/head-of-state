<?php

namespace App\Providers;

use App\Models\Resource;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
    public function boot(Request $request)
    {
        view()->composer(['buildings', 'dashboard', 'profile', 'researches', 'test', 'units'], function ($view) 
        {
            $resources = Resource::where('id', Auth::id())->get();
            $id = Auth::id();
            $city_id = City::where('player_id', $id)->get();

            View::share('owned_resources', $resources);
            View::share('user_id', $id);
            View::share('city_id', $city_id[0]->id);
            View::share('city_name', $city_id[0]->name);
        });  
        Schema::defaultStringLength(191);
    }
}
