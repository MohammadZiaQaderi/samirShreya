<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::post('/home', function () {
    return view('index');
})->name('home');

Route::get('/excelquery-ui', function () {
    return view('Home/excelquerypost');
})->name('excelquery-ui');

//Home routes
Route::post('/excelquery', [App\Http\Controllers\HomeController::class, 
'handleQuery'])->name('excelquery');

Route::get('/secSaleAmadeus', [App\Http\Controllers\HomeController::class,
'handleSecSaleAmadeus'])->name('secSaleAmadeus');

Route::get('/consignmentTracking', [App\Http\Controllers\HomeController::class,
'handleConsignmentTracking'])->name('consignmentTracking');
//
//Cross Tabs routes
Route::get('/depotStacks', [App\Http\Controllers\CrossTabsController::class,
'handleDepotStacks'])->name('depotStacks');

Route::get('/monthEndStocks', [App\Http\Controllers\CrossTabsController::class,
'handleMonthEndStocks'])->name('monthEndStocks');

Route::get('/stockExpiry', [App\Http\Controllers\CrossTabsController::class,
'handleStockExpiry'])->name('stockExpiry');

Route::get('/depotDeptors', [App\Http\Controllers\CrossTabsController::class,
'handleDepotDeptors'])->name('depotDeptors');

Route::get('/pendingOrders', [App\Http\Controllers\CrossTabsController::class,
'handlePendingOrders'])->name('pendingOrders');

Route::get('/depotCollection', [App\Http\Controllers\CrossTabsController::class,
'handleDepotCollection'])->name('depotCollection');

Route::get('/advanceCollection', [App\Http\Controllers\CrossTabsController::class,
'handleAdvanceCollection'])->name('advanceCollection');

Route::get('/MDDespatches', [App\Http\Controllers\CrossTabsController::class,
'handleMDDespatches'])->name('MDDespatches');



