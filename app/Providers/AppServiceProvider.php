<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Auth;
use View;
use App\Admin;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        
        View::composer('*', function ($view)
        {
          if(Auth::check()) {
            $value = Admin::where('user_id', Auth::user()->id)->get()->last();
            $view->with('admin', $value);
          }
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
