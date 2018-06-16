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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', [
    'as' => "products.all",
    'uses' => "ProductsController@showAllProducts"
]);
Route::get('/products/{id}', [
    'as' => "products.one",
    'uses' => "ProductsController@showOneProduct"
]);
Route::post('/products/create', [
   'as' => 'products.create',
   'uses' => 'ProductsController@createProduct'
]);
Route::delete('/products/{id}/', [
    'as' => 'products.delete',
    'uses' => 'ProductsController@destroy'
]);
