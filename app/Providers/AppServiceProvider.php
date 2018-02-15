<?php

namespace App\Providers;

use App\Page;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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

        view()->share('headMenu', $this->getCategoriesMenu());
    }

    private function getCategoriesMenu()
    {
        return Page::getMenuList();
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
