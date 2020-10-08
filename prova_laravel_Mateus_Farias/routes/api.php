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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Tabeliao

Route::get('/listar', 'Api\TabeliaoController@listar');
Route::post('/salvar', 'Api\TabeliaoController@salvar');
Route::get('/buscar/{id}', 'Api\TabeliaoController@buscar');
Route::put('/atualizar/{id}', 'Api\TabeliaoController@atualizar');
Route::delete('/deletar/{id}', 'Api\TabeliaoController@deletar');