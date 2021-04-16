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
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard/store', 'Dashboard\StoreController@index')->name('dashboard.store');
Route::post('/dashboard/store/franchise/store', 'Dashboard\StoreController@franchiseStore');
Route::get('/dashboard/store/create', 'Dashboard\StoreController@franchiseCreate');
