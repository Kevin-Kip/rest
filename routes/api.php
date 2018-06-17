<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', [
    'as' => "products.all",
    'uses' => "ProductsController@showAllProducts"
]);
Route::get('/products/{id}', [
    'as' => "products.one",
    'uses' => "ProductsController@showOneProduct"
]);
Route::put('/products/{id}', [
    'as' => "products.update",
    'uses' => "ProductsController@updateProduct"
]);
Route::post('/products/create', [
    'as' => 'products.create',
    'uses' => 'ProductsController@createProduct'
]);
Route::delete('/products/{id}/', [
    'as' => 'products.delete',
    'uses' => 'ProductsController@destroy'
]);