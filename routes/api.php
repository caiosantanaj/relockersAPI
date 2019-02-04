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

//DUVIDA
//Pq n pode ser Route::Resource('localizacaoCacifo', 'LocalizacaoController'); ????

//CACIFO
Route::Resource('cacifos', 'CacifoController');

Route::Resource('estados', 'EstadoController');
Route::Resource('tamanhos', 'TamanhoController');
Route::Resource('localizacaos', 'LocalizacaoController');

Route::group(['prefix' => 'cacifo'], function () {
    Route::apiResource('/{cacifo}/log', 'LogCacifoController');
});

//CLIENTE
Route::Resource('clientes', 'ClienteController');
//CLIENTES -> Encomenda
Route::get('cliente/{cliente}/encomendas', 'EncomendaController@clientesEncomenda');

//ENCOMENDA
Route::Resource('encomendas', 'EncomendaController');

//Utilizador
Route::Resource('users', 'UserController');
Route::Resource('userTypes', 'UserTypeController');

Route::get('users/{user}/encomendas', 'UserController@userEncomendas');
Route::post('users/{user}/encomendas/{encomenda}', 'UserController@storeUserEncomendas');