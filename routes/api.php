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


//CLIENTE
Route::Resource('clientes', 'ClienteController');
Route::get("clientes/{cliente}/encomendas", "EncomendaController@encomendaDoCliente");

//CLIENTES -> Encomenda
//Route::group(["prefix"=>"clientes"], function() {
//   Route::get("/{cliente}/encomendas", "EncomendaController@encomendaToCliente");
//});

//ENCOMENDA
Route::apiResource('encomendas', 'EncomendaController');

//Route::get("clientes/{cliente}/encomendas", "EncomendaController@encomendaToCliente");

//Utilizador
Route::Resource('users', 'UserController');
Route::Resource('userTypes', 'UserTypeController');
