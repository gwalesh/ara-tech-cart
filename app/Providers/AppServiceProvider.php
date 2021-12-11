<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\City;
use App\Models\Cart;

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
        $data['cities'] = City::orderBy('name','asc')->get();
        $data['carts'] = Cart::all();
        view()->share($data);
    }
}
