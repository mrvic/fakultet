<?php

namespace Fakultet\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Laravel\Dusk\DuskServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 07.06.2017. Od verzije 5.4 nije više potrebno blade::setechoformat
        // Dodao ovo zbog hr slova u unit testingu:
        // https://laravel.io/forum/07-30-2014-problem-with-utf8-or-unicode
        //\Blade::setEchoFormat('e(utf8_decode(%s))');
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
     if ($this->app->environment('local', 'testing')) {
        $this->app->register(DuskServiceProvider::class);
    }
    }
}
