<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
// $dir = '/travelsite';
Route::get('/', function () {
    return view('welcome');
});

Route::resource('customers', 'CustomerController');
Route::resource('country', 'CountryController');
Route::resource('town', 'TownController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
