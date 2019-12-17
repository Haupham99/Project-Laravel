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

Route::group(['prefix' => ''], function () {
    //Product
    Route::group(['prefix' => 'product'], function () {
        Route::get('shop', 'FrontendController@GetShop');
        Route::get('detail', 'FrontendController@GetDetail');
    });
    //Cart
    Route::group(['prefix' => 'cart'], function () {
        Route::get('', 'FrontendController@GetCart');
    });
    //Checkout
    Route::group(['prefix' => 'checkout'], function () {
        Route::get('complete', 'FrontendController@GetComplete');
        Route::get('', 'FrontendController@GetCheckout');
    });
    //
    Route::get('index', 'FrontendController@GetIndex');
    Route::get('contact', 'FrontendController@GetContact');
    Route::get('about', 'FrontendController@GetAbout');
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
