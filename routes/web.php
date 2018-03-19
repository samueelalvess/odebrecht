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

    Route::get('/lista', 'Dashboard\ClientController@index')->name('clientList');

    Route::get('/{id}/dadoscliente','Dashboard\ClientController@edit')->name('clientData');

});

Route::prefix('/vendedores')->group(function () {

    Route::get('/lista', 'Dashboard\SellerController@index')->name('sellerList');

    Route::get('/dadosvendedor', function () {
        return view('dashboard.seller.seller');
    })->name('sellernew');

});

Route::prefix('/product')->group(function () {

Route::get('/produtos', function () {
    return view('dashboard.product.productlist');
})->name('productList');

});
