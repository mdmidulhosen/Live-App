<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OrderController;












Route::group([
    'prefix'=>'order'
], function() {
    Route::get('/index',[OrderController::class, 'orderIndexPage'])->name('Order.IndexPage');
    Route::get('/view/{id}',[OrderController::class, 'orderView'])->name('Order.ViewPage');
    Route::post('/order/status/{id}',[OrderController::class, 'orderStatus'])->name('Order.Status');

});
