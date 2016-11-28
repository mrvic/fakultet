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
