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

Route::get('/', 'IndexController@index');
Route::post('generate-shorten-link', 'IndexController@store')->name('generate.shorten.link.post');
Route::get('{code}', 'IndexController@shortenLink')->name('shorten.link');
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/about', function () {
    return view('about');
});
