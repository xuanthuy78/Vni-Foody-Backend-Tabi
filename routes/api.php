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
Route::group(['middleware' => 'api'], function () {
    Route::post('upload', 'FilesController@upload');
    Route::post('uploadsimple', 'FilesController@uploadSimple');
    Route::apiResource('product', 'ProductController');
    Route::apiResource('brand', 'BrandController');
    Route::apiResource('slide', 'SlideController');
    Route::get('articles/categories', 'ArticleController@showCategories');
    Route::apiResource('articles', 'ArticleController');
    Route::apiResource('articles', 'ArticleController');
    Route::apiResource('categories', 'CategoriesController');
    Route::get('product-category/{id}', 'ProductController@getByCategory');
    Route::get('product-brand/{id}', 'ProductController@getByBrand');
    Route::apiResource('order', 'OrderController');
    Route::post('order/updateStatus', 'OrderController@updateStatus');
});
