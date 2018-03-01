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
    return view('dashboard.base');
})->name('home');

Route::prefix('/client')->group(function () {

    Route::get('/clientes', 'Dashboard\ClientController@index')->name('clientList');

});
