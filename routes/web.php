<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerPageController;
use App\Http\Controllers\SellerPageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StoreProductController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UploadController;
use App\Http\Middleware\CustomerMiddleware;
use App\Http\Middleware\SellerMiddleware;




Auth::routes();



// // Seller Page Routes


Route::group(['middleware' => CustomerMiddleware::class], function(){
    // Customer Page Routes
    Route::get('/', [CustomerPageController::class, 'index'])->name('home');
    Route::get('/home', [CustomerPageController::class, 'index'])->name('home');
    Route::get('/products', [CustomerPageController::class, 'products'])->name('products');
    Route::get('/contact', [CustomerPageController::class, 'contact'])->name('contact');
    Route::get('/product/{id}', [CustomerPageController::class, 'product'])->name('product');

    Route::middleware(['auth'])->group(function () {
        Route::get('/orders/clear', [OrderController::class, 'clear'])->name('orders.clear');
        Route::get('/orders/checkout', [OrderController::class, 'checkout'])->name('orders.checkout');
        Route::get('/orders/tracking', [OrderController::class, 'order_tracking'])->name('orders.track');
        Route::post('/orders/checkout/confirm', [OrderController::class, 'checkout_confirm'])->name('orders.confirm');
        Route::resource('/orders', OrderController::class);
        Route::resource('/account', AccountController::class);
    });
});

Route::group(['middleware' => SellerMiddleware::class], function(){
    Route::middleware(['auth'])->group(function () {
        Route::get('/store/dashboard', [SellerPageController::class, 'index'])->name('store.index');
        Route::get('/store', [SellerPageController::class, 'index'])->name('store.index');
        Route::resource('/store/products', StoreProductController::class);
    });
});
