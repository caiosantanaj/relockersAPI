<?php

namespace App\Http\Controllers;

use App\Model\LogCacifo;
use Illuminate\Http\Request;
use App\Model\Cacifo;
use App\Http\Resources\LogCacifo\LogCacifoResource;
use Symfony\Component\HttpFoundation\Response;

/**
 * @group Log management
 *
 * Endpoint para controlar os logs
 * 
 */
class LogCacifoController extends Controller
{
    /**
     * Get Log
     * 
     * Lista todas os logs de um cacifo.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Cacifo $cacifo)
    {
        return $cacifo->cacifoLogs;
    }

    /**
     * Post Encomenda
     *
     * Adiciona uma nova encomenda.
     * 
     * @bodyParam data_hora date required Data e hora do registo.
     * @bodyParam cacifo_numero required int Número do cacifo.
     * @bodyParam encomenda_numero int required Número da encomenda.
     * @bodyParam user_id date int Id do utilizador.
     * @bodyParam user_name string Nome do utilizador.
     * @bodyParam user_tipo string Tipo do utilizador.
     * @bodyParam cliente_id int Id do cliente associadoa encomenda.
     * @bodyParam cliente_nome string Nome do cliente associado a encomenda.
     * @bodyParam cacifo_id int required Id do cacifo.
     * 
     * @response{
     *   "msg": "Success",
     *   "code": 201,
     *   "data": {"properties": "logCacifoObject"}
     * }
     * 
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $request = $request->only([
                'data_hora', 'cacifo_numero', 'encomenda_numero', 'user_id', 'user_name',
                'user_tipo', 'cliente_id', 'cliente_nome', 'cacifo_id'
            ]);

            $log = new LogCacifo;
            $log->data_hora = $request['data_hora'];
            $log->cacifo_numero = $request['cacifo_numero'];
            $log->encomenda_numero = $request['encomenda_numero'];
            $log->user_id = $request['user_id'];
            $log->user_name = $request['user_name'];
            $log->user_tipo = $request['user_tipo'];
            $log->cliente_id = $request['cliente_id'];
            $log->cliente_nome = $request['cliente_nome'];
            $log->cacifo_id = $request['cacifo_id'];

            $log->save();

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_CREATED,
                'data' => new LogCacifoResource($log),
            ], Response::HTTP_CREATED);

        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get a Log.
     * 
     * Mostra um log detalhada.
     *
     * @param  \App\Model\LogCacifo  $logCacifo
     * @return \Illuminate\Http\Response
     */
    public function show(LogCacifo $logCacifo)
    {
        return new LogCacifoResource($logCacifo);
    }

    /**
     * Remove a log.
     * 
     * Disabled request.
     *
     * @param  \App\Model\LogCacifo  $logCacifo
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogCacifo $logCacifo)
    {
        // try {
        //     $logCacifo->delete();

        //     return response([
        //         'msg' => 'Success',
        //         'code' => Response::HTTP_OK,
        //     ], Response::HTTP_OK);
        // } catch (\Exception $e) {
        //     return response([
        //         'msg' => "$e->getMessage()",
        //         'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
        //     ], Response::HTTP_INTERNAL_SERVER_ERROR);
        // }
    }
}
