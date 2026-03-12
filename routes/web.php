<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', App\Http\Controllers\ProductController::class);

Route::resource('scorders', App\Http\Controllers\ScorderController::class);

Route::resource('orderdetails', App\Http\Controllers\OrderdetailController::class);

Route::get('product/displaygrid','App\Http\Controllers\ProductController@displayGrid')->name('products.displaygrid');

Route::get('product/additem/{id}','App\Http\Controllers\productController@additem')->name('products.additem');

Route::get('product/emptycart','App\Http\Controllers\productController@emptycart')->name('product.emptycart');

Route::get('scorder/checkout','App\Http\Controllers\scorderController@checkout')->name('scorder.checkout');

Route::post('scorder/placeorder','App\Http\Controllers\scorderController@placeorder')->name('scorder.placeorder');