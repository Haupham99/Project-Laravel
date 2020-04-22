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

//Route frontend

Route::get('', 'FrontendController@GetIndex');
Route::group(['prefix' => ''], function () {
    //Product
    Route::group(['prefix' => 'product'], function () {
        Route::get('shop', 'FrontendController@GetShop')->name('product.shop');
        Route::get('detail', 'FrontendController@GetDetail')->name('product.detail');
    });
    //Cart
    Route::group(['prefix' => 'cart'], function () {
        Route::get('', 'FrontendController@GetCart')->name('cart');
    });
    //Checkout
    Route::group(['prefix' => 'checkout'], function () {
        Route::get('complete', 'FrontendController@GetComplete')->name('checkout.complete');
        Route::get('', 'FrontendController@GetCheckout')->name('checkout');
    });
    //
    Route::get('index', 'FrontendController@GetIndex')->name('index');
    Route::get('contact', 'FrontendController@GetContact')->name('contact');
    Route::get('about', 'FrontendController@GetAbout')->name('about');
});

//Route backend
Route::group(['prefix' => 'admin'], function () {
    //Category
    Route::group(['prefix' => 'category'], function () {
        Route::get('', 'BackendController@GetCategory');
        Route::get('edit', 'BackendController@GetEditCategory');
    });
    //Login
    Route::group(['prefix' => 'login'], function () {
        Route::get('', 'BackendController@GetLogin');
    });
    //Order
    Route::group(['prefix' => 'order'], function () {
        Route::get('', 'BackendController@GetOrder');
        Route::get('detail', 'BackendController@GetDetailOrder');
        Route::get('processed', 'BackendController@GetProcessed');
    });
    //Product
    Route::group(['prefix' => 'product'], function () {
        Route::get('add', 'BackendController@GetAddProduct');
        Route::get('edit', 'BackendController@GetEditProduct');
        Route::get('list', 'BackendController@GetListProduct');
    });
    //User
    Route::group(['prefix' => 'user'], function () {
        Route::get('edit', 'BackendController@GetEditUser');
        Route::get('add', 'BackendController@GetAddUser');
        Route::get('list', 'BackendController@GetListUser');
    });
    //Index
    Route::get('index', 'BackendController@GetIndex');
});
