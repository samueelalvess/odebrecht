<?php

Route::get('/', function () {
    return view('dashboard.base');
})->name('home');

Route::prefix('/clientes')->group(function () {

    Route::get('/lista', 'Dashboard\ClientController@index')->name('clientList');

    Route::get('/{id}/dadoscliente','Dashboard\ClientController@edit')->name('clientData');

});

Route::prefix('/vendedores')->group(function () {

    Route::get('/lista', 'Dashboard\SellerController@index')->name('sellerList');

    Route::get('/{id}/dadosvendedor','Dashboard\SellerController@edit')->name('sellerData');

});

Route::prefix('/pedidos')->group(function () {

  Route::get('/novo','Dashboard\RequestController@create')->name('newOrder');
  Route::get('/{id}/finalizar','Dashboard\RequestController@checkout')->name('checkoutOrder');

  Route::get('/faturados', function () {
  return view('dashboard.order.billedorderslist');
  })->name('billedList');

  Route::get('/naofaturados', function () {
  return view('dashboard.order.notbilledorderslist');
  })->name('notbilledList');

});

Route::prefix('/informativos')->group(function () {

  Route::get('/lista', function () {
  return view('dashboard.informative.informativelist');
  })->name('informativeList');

  Route::get('/dados', function () {
  return view('dashboard.informative.informative');
  })->name('informativeData');

});
