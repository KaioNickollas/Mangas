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
    return view('home');
})->name('home');

Route::group(['prefix' => 'client'], function () {
    Route::get ('register' , 'ClientController@register')->name('client.register');
    Route::post('new-user' , 'ClientController@store')->name('client.store');
    Route::get ('edit/{id}', 'ClientController@edit')->name('client.edit');
    Route::post('update/{id}', 'ClientController@update')->name('client.update');
    Route::get ('login'    , 'ClientController@login')->name('client.login');
    Route::post('log-in'   , 'ClientController@postLogin')->name('client.postLogin');
    Route::get ('logout'   , 'ClientController@logout')->name('client.logout');
});
