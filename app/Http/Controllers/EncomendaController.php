<?php

namespace App\Http\Controllers;

use App\Model\Encomenda;
use Illuminate\Http\Request;
use App\Http\Resources\Encomenda\EncomendaCollection;
use function GuzzleHttp\Promise\all;
use App\Http\Resources\Encomenda\EncomendaResource;
use App\Model\Cliente;
use App\Http\Requests\EncomendaRequest;
use Symfony\Component\HttpFoundation\Response;

/**
 * @group Encomendas management
 *
 * Endpoint para controlar a APIs das encomendas
 * 
 */
class EncomendaController extends Controller
{
    /**
     * Get Encomendas
     * 
     * Lista todas as encomendas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Encomenda::with('users', 'cacifo', 'cliente')->get();
        //return EncomendaCollection::collection(Encomenda::all());
    }

    /**
     * Get Encomendas of a cliente
     * 
     * Devolve as encomendas de um cliente.
     *
     * @return \Illuminate\Http\Response
     */
    public function clientesEncomenda(Cliente $cliente)
    {
        return EncomendaResource::collection($cliente->encomendas);
    }

    /**
     * Post Encomenda
     *
     * Adiciona uma nova encomenda.
     * 
     * @bodyParam data_estimada date required Data estimada da entrega da encomenda..
     * @bodyParam data_de_entrega date optional Data de entrega da encomenda.
     * @bodyParam data_de_levantamento date optional Data de levantamento da encomenda.
     * @bodyParam data_de_entrada_no_sistema date required Data em que a encomenda foi registada no sistema.
     * @bodyParam data_de_entrega_pretendida date required Data em que o cliente pretende a entrega.
     * @bodyParam tempo_limite_de_levantamento date required Tempo limite para o levantamento de certa encomenda.
     * @bodyParam temperatura float optional Temperatura de uma encomenda. Caso seja nulo o valor default será: 20.
     * @bodyParam observacoes string optional Observações de uma encomenda. Caso seja nula o valor default será: "Nenhuma observação.".
     * @bodyParam tamanho string required Tamanho de uma encomenda.
     * @bodyParam localizacao string required Localização de entrega pretendida.
     * @bodyParam cliente_id string required Id do cliente que possui a encomenda.
     * @bodyParam cacifo_id string optional Id do cacifo de onde a encomenda vai ser colocada.
     * 
     * @response{
     *   "msg": "Success",
     *   "code": 201,
     *   "data": {"properties": "encomendaObject"}
     * }
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EncomendaRequest $request)
    {

        try {

            $observacoes = ($request['observacoes'] === null) ? "Nenhuma observação." : $request['observacoes'];
            $temperatura = ($request['temperatura'] === null) ? "20" : $request['temperatura'];

            $request = $request->only([
                'data_estimada', 'data_de_entrega', 'data_de_levantamento',
                'data_de_entrada_no_sistema', 'data_de_entrega_pretendida', 'tempo_limite_de_levantamento',
                'temperatura', 'observacoes', 'cliente_id', 'cacifo_id', 'tamanho', 'localizacao'
            ]);

            $encomenda = new Encomenda;
            $encomenda->data_estimada = $request['data_estimada'];
            $encomenda->data_de_entrega = $request['data_de_entrega'];
            $encomenda->data_de_levantamento = $request['data_de_levantamento'];
            $encomenda->data_de_entrada_no_sistema = $request['data_de_entrada_no_sistema'];
            $encomenda->data_de_entrega_pretendida = $request['data_de_entrega_pretendida'];
            $encomenda->tempo_limite_de_levantamento = $request['tempo_limite_de_levantamento'];
            $encomenda->localizacao = $request['localizacao'];
            $encomenda->tamanho = $request['tamanho'];
            $encomenda->temperatura = $temperatura;
            $encomenda->observacoes = $observacoes;
            $encomenda->cliente_id = $request['cliente_id'];
            $encomenda->cacifo_id = $request['cacifo_id'];

            $encomenda->save();

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_CREATED,
                'data' => new EncomendaResource($encomenda),
            ], Response::HTTP_CREATED);

        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get a Encomenda.
     * 
     * Mostra uma encomenda detalhada.
     *
     * @param  \App\Model\Encomenda  $encomenda
     * @return \Illuminate\Http\Response
     */
    public function show(Encomenda $encomenda)
    {
        return Encomenda::whereId($encomenda->id)->with('users', 'cacifo', 'cliente')->get();
        //return new EncomendaResource($encomenda);
    }

    /**
     * Update Encomenda
     *
     * Atualiza uma encomenda.
     
     * @bodyParam data_estimada date optional Data estimada da entrega da encomenda..
     * @bodyParam data_de_entrega date optional Data de entrega da encomenda.
     * @bodyParam data_de_levantamento date optional Data de levantamento da encomenda.
     * @bodyParam data_de_entrada_no_sistema date optional Data em que a encomenda foi registada no sistema.
     * @bodyParam data_de_entrega_pretendida date optional Data em que o cliente pretende a entrega.
     * @bodyParam tempo_limite_de_levantamento date optional Tempo limite para o levantamento de certa encomenda.
     * @bodyParam temperatura float optional Temperatura de uma encomenda. Caso seja nulo o valor default será: 20.
     * @bodyParam observacoes string optional Observações de uma encomenda. Caso seja nula o valor default será: "Nenhuma observação.".
     * @bodyParam tamanho string optional Tamanho de uma encomenda.
     * @bodyParam localizacao string optional Localização de entrega pretendida.
     * @bodyParam cliente_id string optional Id do cliente que possui a encomenda.
     * @bodyParam cacifo_id string optional Id do cacifo de onde a encomenda vai ser colocada.
     * 
     * @response{
     *   "msg": "Success",
     *   "code": 200,
     *   "data": {"properties": "encomendaObject"}
     * }
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Encomenda  $encomenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encomenda $encomenda)
    {
        try {

            $request = $request->only([
                'data_estimada', 'data_de_entrega', 'data_de_levantamento',
                'data_de_entrada_no_sistema', 'data_de_entrega_pretendida', 'tempo_limite_de_levantamento',
                'temperatura', 'observacoes', 'cliente_id', 'cacifo_id', 'tamanho', 'localizacao'
            ]);


            $encomenda->update($request);

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_OK,
                'data' => new EncomendaResource($encomenda),
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Delete Encomenda
     * 
     * Apaga uma encomenda.
     * 
     * @response {
     *   "msg": "Seccess",
     *   "code": 200
     * }
     *
     * @param  \App\Model\Encomenda  $encomenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encomenda $encomenda)
    {
        try {
            $encomenda->delete();

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_OK,
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response([
                'msg' => "$e->getMessage()",
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
