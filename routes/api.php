<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Obtenemos todos los registros de la consulta
Route::get('/productos','App\Http\Controllers\ProductoController@index');//Todos los registro
Route::post('/productos','App\Http\Controllers\ProductoController@store');//Crea
Route::put('/productos/{producto}','App\Http\Controllers\ProductoController@update');//Actualizamos
Route::get('/productos/{producto}','App\Http\Controllers\ProductoController@show');//devuelve un solo registro
Route::delete('/productos/{producto}','App\Http\Controllers\ProductoController@destroy');//eliminar