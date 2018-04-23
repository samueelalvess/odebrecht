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
  Route::post('/finalizado','Dashboard\RequestController@store')->name('finalizarTESTE');

  Route::get('/faturados', 'Dashboard\RequestController@reportBilled')->name('billedList');
  Route::get('/naofaturados', 'Dashboard\RequestController@reportNotBilled')->name('notbilledList');

});

Route::prefix('/informativos')->group(function () {

  Route::get('/lista', function () {
  return view('dashboard.informative.informativelist');
  })->name('informativeList');

  Route::get('/dados', function () {
  return view('dashboard.informative.informative');
  })->name('informativeData');

  Route::get('/novo', function () {
  return view('dashboard.informative.newinformative');
  })->name('informativeNew');

  Route::post('/store','Dashboard\InformativeController@store')->name('informativeStore');

  Route::get('/editar', function () {
  return view('dashboard.informative.newinformative');
  })->name('informativeEdit');

});
