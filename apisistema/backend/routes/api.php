<?php

use Illuminate\Http\Request;
header("Access-Control-Expose-Headers: Access-Control-*");
header("Access-Control-Allow-Headers: Access-Control-*, Origin, Authorization, X-Auth-Token, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS, HEAD');
header('Access-Control-Allow-Origin: *');
header('Allow: GET, POST, PATCH, PUT, DELETE, OPTIONS, HEAD');
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

// Route::group(['prefix' => 'produtos'], function () {
//     Route::get('', ['as' => 'api.produtos.index', 'uses' => 'ProdutoController@index']);
//     Route::get('create', ['as' => 'api.produtos.create', 'uses' => 'ProdutoController@create']);
//     Route::post('store', ['as' => 'api.produtos.store', 'uses' => 'ProdutoController@store']);
//     Route::get('edit/{id}', ['as' => 'api.produtos.edit', 'uses' => 'ProdutoController@edit']);
//     Route::put('update/{id}', ['as' => 'api.produtos.update', 'uses' => 'ProdutoController@update']);
//     Route::get('destroy/{id}', ['as' => 'api.produtos.destroy', 'uses' => 'ProdutoController@destroy']);
// });


Route::group(['middleware' => ['cors']], function () {
});

Route::resource('produtos', 'ProdutoController');

//+--------+-----------+-----------------------------+------------------+------------------------------------------------+--------------+
//| Method    | URI                         | Name             | Action                                         | Middleware   |
//+--------+-----------+-----------------------------+------------------+------------------------------------------------+--------------+
//| GET|HEAD  | /                           |                  | Closure                                        | web          |
//| GET|HEAD  | api/produtos                | produtos.index   | App\Http\Controllers\ProdutoController@index   | api,cors     |
//| POST      | api/produtos                | produtos.store   | App\Http\Controllers\ProdutoController@store   | api,cors     |
//| GET|HEAD  | api/produtos/create         | produtos.create  | App\Http\Controllers\ProdutoController@create  | api,cors     |
//| GET|HEAD  | api/produtos/{produto}      | produtos.show    | App\Http\Controllers\ProdutoController@show    | api,cors     |
//| PUT|PATCH | api/produtos/{produto}      | produtos.update  | App\Http\Controllers\ProdutoController@update  | api,cors     |
//| DELETE    | api/produtos/{produto}      | produtos.destroy | App\Http\Controllers\ProdutoController@destroy | api,cors     |
//| GET|HEAD  | api/user                    |                  | Closure                                        | api,auth:api |
//+--------+-----------+-----------------------------+------------------+------------------------------------------------+--------------+
