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
Route::Resource('cacifos', 'CacifoController')->middleware('auth:api');

Route::Resource('estados', 'EstadoController')->middleware('auth:api');
Route::Resource('tamanhos', 'TamanhoController')->middleware('auth:api');
Route::Resource('localizacaos', 'LocalizacaoController')->middleware('auth:api');

Route::group(['prefix' => 'cacifo'], function () {
    Route::apiResource('/{cacifo}/log', 'LogCacifoController');
});
//Encomenda num cacifo
// Route::get('cacifos/{cacifo}/encomenda', 'CacifoController@encomendaCacifo');

//CLIENTE
Route::Resource('clientes', 'ClienteController')->middleware('auth:api');
//CLIENTES -> Encomenda
Route::get('cliente/{cliente}/encomendas', 'EncomendaController@clientesEncomenda')->middleware('auth:api');

//ENCOMENDA
Route::Resource('encomendas', 'EncomendaController')->middleware('auth:api');

//Utilizador
Route::Resource('users', 'UserController')->middleware('auth:api');
Route::Resource('userTypes', 'UserTypeController')->middleware('auth:api');

Route::get('users/{user}/encomendas', 'UserController@userEncomendas')->middleware('auth:api');
Route::post('users/{user}/encomendas/{encomenda}', 'UserController@storeUserEncomendas')->middleware('auth:api');