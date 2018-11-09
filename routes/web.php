<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/assets/logo', function () {
    return response()->file(public_path()."/img/OreoPi.png");
})->name("oreopilogo");

Auth::routes(['register' => false]);
Route::get('/music', 'HomeController@music')->name("music");

Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@home')->name('home');

Auth::routes(['register' => false]);
Route::get('/api/temperature', 'HomeController@curtemp')->name('current_temp');