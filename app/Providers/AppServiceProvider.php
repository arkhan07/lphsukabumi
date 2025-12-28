<?php

namespace App\Providers;

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
        // Share settings with all views
        view()->composer('*', function ($view) {
            $view->with('siteSettings', [
                'logo' => \App\Models\Setting::get('site_logo', '../img/logo.webp'),
                'favicon' => \App\Models\Setting::get('site_favicon', 'images/favicon.png'),
                'name' => \App\Models\Setting::get('site_name', 'LPH Doa Bangsa Sukabumi'),
                'description' => \App\Models\Setting::get('site_description', 'Lembaga Pemeriksa Halal Doa Bangsa Sukabumi'),
                'recaptcha_enabled' => \App\Models\Setting::get('recaptcha_enabled', '0') == '1',
                'recaptcha_site_key' => \App\Models\Setting::get('recaptcha_site_key', ''),
            ]);
        });
    }
}
