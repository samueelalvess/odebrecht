<?php


Route::get('/login', function () {
    return view('dashboard.login');
})->name('logar');


Route::post('/login','Dashboard\SellerController@login')->name('login');

Route::get('/logout','Dashboard\SellerController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function () {

          Route::get('/','Dashboard\DashboardController@index')->name('home');

          Route::prefix('/clientes')->group(function () {

              Route::get('/lista', 'Dashboard\ClientController@index')->name('clientList');

              Route::get('/{id}/dadoscliente','Dashboard\ClientController@edit')->name('clientData');

          });

          Route::prefix('/vendedores')->group(function () {

              Route::get('/lista', 'Dashboard\SellerController@index')->name('sellerList');

              Route::get('/{id}/dadosvendedor','Dashboard\SellerController@show')->name('sellerData');

              Route::get('/{id}/vincular','Dashboard\SellerController@link')->name('linkSeller');

              Route::get('/{id}/edit','Dashboard\SellerController@edit')->name('linksellerEdit');

              Route::post('{id}/salva','Dashboard\SellerController@linkUser')->name('linksellerStore');

              Route::put('/{id}/update','Dashboard\SellerController@update')->name('linksellerUpdate');

          });

          Route::prefix('/pedidos')->group(function () {

              Route::get('/novo','Dashboard\RequestController@create')->name('newOrder');

              Route::get('/{id}/finalizar','Dashboard\RequestController@checkout')->name('checkoutOrder');

              Route::post('/finalizado','Dashboard\RequestController@store')->name('finalizarTESTE');

              Route::get('/faturados', 'Dashboard\RequestController@reportBilled')->name('billedList');

              Route::get('/naofaturados', 'Dashboard\RequestController@reportNotBilled')->name('notbilledList');

              Route::get('/imprimir', function () {
              return view('dashboard.order.printorder');
              })->name('printOrder');

          });

          Route::prefix('/informativos')->group(function () {

              Route::get('/lista', 'Dashboard\InformativeController@index')->name('informativeList');

              Route::get('/{id}/dados', 'Dashboard\InformativeController@show')->name('informativeData');

              Route::get('/novo', function () {
              return view('dashboard.informative.newinformative');
              })->name('informativeNew');

              Route::post('/store','Dashboard\InformativeController@store')->name('informativeStore');

              Route::get('/{id}/edit','Dashboard\InformativeController@edit')->name('informativeEdit');

              Route::post('/salva','Dashboard\InformativeController@store')->name('informativeStore');

              Route::put('/{id}/update','Dashboard\InformativeController@update')->name('informativeUpdate');

          });
});
