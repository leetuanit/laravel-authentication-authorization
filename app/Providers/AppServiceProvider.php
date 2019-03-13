<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DashboardMenuController;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->share_info_to_all_views();
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
    private function share_info_to_all_views(){
        if (!$this->app->runningInConsole()) {
            $setting = new SettingController;
            View::share('setting',$setting->get());
            $menus = new DashboardMenuController;
            View::share('menus',$menus->show());
        }
    }
}
