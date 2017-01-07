<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('create',['as'=>'addStock','uses'=>'warehouseController@getForm']);
Route::post('create/store',['uses'=>'warehouseController@storeProduct']);


//get wareHouse Homepage
Route::get('warehouse',['as'=>'homepage','uses'=>'warehouseController@getHomePage']);
//get displayItem
Route::get('display',['as'=>'shop','uses'=>'warehouseController@getItems']);
//get Items per page and their individual description
Route::get('display/{id}',['as'=>'itemDescription','uses'=>'warehouseController@getDetails']);

Route::get('/email',['as'=>'email','uses'=>'emailController@send_mail']);