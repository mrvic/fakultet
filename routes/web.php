<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

#File: app/Http/routes.php
Route::get('/show-autoloaders', function(){
    foreach(spl_autoload_functions() as $callback)
    {
        if(is_string($callback))
        {
            echo '- ',$callback,"\n<br>\n";
        }

        else if(is_array($callback))
        {
            if(is_object($callback[0]))
            {
                echo '- ',get_class($callback[0]);
            }
            elseif(is_string($callback[0]))
            {
                echo '- ',$callback[0];
            }
            echo '::',$callback[1],"\n<br>\n";            
        }
        else
        {
            var_dump($callback);
        }
    }
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/xxx', function () {
    return "xxx";
});

//Fakultet aplikacija
Route::resource('mjesto',   'MjestoController');
Route::resource('zupanija', 'ZupanijaController');
Route::resource('studenti', 'StudController');

Route::resource('autos', 'auto');

Route::resource('nerds', 'NerdController');

Route::resource('nerds2angular', 'Nerd2AngularController');

Route::get('laravel-version', function()
{
$laravel = app();
return "Your Laravel version is ".$laravel::VERSION;
});
