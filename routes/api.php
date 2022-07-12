<?php

use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/v1/category', 'api\V1\CategoryController@index');
Route::get('/v1/content', 'api\V1\ContentController@index');
Route::get('/v1/content/{content}', 'api\V1\ContentController@show');
Route::get('/v1/content/category/{category}', 'api\V1\ContentController@byCategory');
Route::get('/v1/content/name/{name}', 'api\V1\ContentController@byName');
