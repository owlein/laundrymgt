<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//     return 'Hello World!';
// });

Route::get('hello', 'Hello@index');
Route::get('/hello/{name}', 'Hello@show');

// Route::model('order', 'Order');
// Route::model('customer', 'Customer');
// Route::model('clothes', 'Clothes');

Route::resource('customer', 'CustomerController');
Route::resource('order', 'OrderController');
Route::resource('order.clothes', 'ClothesController');

// Route::bind('customer', function($value, $route) {
// 	return App\Customer::whereId($value)->first();
// });
// 
// Route::bind('clothes', function($value, $route) {
// 	return App\Clothes::whereId($value)->first();
// });
// 
// Route::bind('order', function($value, $route) {
// 	return App\Order::whereId($value)->first();
// });