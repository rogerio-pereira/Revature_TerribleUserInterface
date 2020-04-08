<?php

use Illuminate\Support\Facades\Route;

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


//Auth::routes();
Route::get('login', 'LoginController@index')->name('login.form');
Route::post('login', 'LoginController@login')->name('login');
Route::post('logout', 'LogoutController@logout')->name('logout');
Route::get('error', 'ErrorController@index')->name('error');
Route::get('register', 'RegisterController@index')->name('register.form');
Route::post('register', 'RegisterController@store')->name('register');

Route::group([
    'middleware' => 'auth'
], function() 
{
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/home', 'HomeController@index')->name('home');
});