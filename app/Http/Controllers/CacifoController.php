<?php

namespace App\Http\Controllers;

use App\Model\Cacifo;
use Illuminate\Http\Request;
use App\Http\Resources\Cacifo\CacifoCollection;
use App\Http\Resources\Cacifo\CacifoResource;
use App\Http\Requests\CacifoRequest;
use Symfony\Component\HttpFoundation\Response;

/**
 * @group Cacifo management
 *
 * Endpoint para controlar a APIs dos cacifos
 * 
 */
class CacifoController extends Controller
{
    /**
     * Get Cacifos
     *
     * Lista todos os cacifos.
     * 
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
        return CacifoCollection::collection(Cacifo::all())->additional([
            'msg' => 'success',
            'code' => Response::HTTP_OK
        ]);
    }

    /**
     * Post Cacifos
     *
     * Adiciona novo cacifos.
     * 
     * @bodyParam numero string required Número do cacífo.
     * @bodyParam temperatura string required Temperatura do cacífo.
     * @bodyParam codigo string required Código do cacífo.
     * @bodyParam estado_id string required Estado do cacífo(id).
     * @bodyParam tamanho_id string required Tamanho do cacífo(id).
     * @bodyParam localizacao_id string required Localização do cacífo(id).
     * 
     * @response {
     *   "msg": "Success",
     *   "code": 201,
     *   "data": {
     *     "id": 21,
     *     "numero": 1,
     *     "temperatura": "20",
     *     "codigo": "UNLOCK",
     *     "tamanho_id": 4,
     *     "estado_id": 2,
     *     "localizacao_id": 5,
     *     "tamanho": {
     *       "id": 4,
     *       "tamanho": "L"
     *     },
     *     "estado": {
     *       "id": 2,
     *       "estado": "Disponivel"
     *     },
     *     "localizacao": {
     *       "id": 5,
     *       "nome": "Borer Avenue",
     *       "lat": "87.823365",
     *       "long": "101.362484"
     *     }
     *   }
     * }
     * 
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store(CacifoRequest $request)
    {
        try {

            $temperatura = ($request['temperatura'] === null) ? 20 : $request['temperatura'];
            $codigo = ($request['codigo'] === null) ? "UNLOCKED" : $request['codigo'];

            $request = $request->only(['numero', 'tamanho_id', 'estado_id', 'localizacao_id', 'temperatura', 'codigo']);

            $cacifo = new Cacifo;
            $cacifo->numero = $request['numero'];
            $cacifo->tamanho_id = $request['tamanho_id'];
            $cacifo->estado_id = $request['estado_id'];
            $cacifo->localizacao_id = $request['localizacao_id'];

            $cacifo->temperatura = $temperatura;
            $cacifo->codigo = $codigo;

            $cacifo->save();

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_CREATED,
                'data' => new CacifoResource($cacifo),
            ], Response::HTTP_CREATED);

        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get um cacifo.
     * 
     * Mostra um cacifo detalhado. 
     *
     * @param  \App\Model\Cacifo  $cacifo
     * @return \Illuminate\Http\Response
     */
    public function show(Cacifo $cacifo)
    {
        return new CacifoResource($cacifo);
    }

    /**
     * Update Cacifos
     *
     * Faz update a um cacifos.
     * 
     * @bodyParam numero string Número do cacífo.
     * @bodyParam temperatura string Temperatura do cacífo.
     * @bodyParam codigo string Código do cacífo.
     * @bodyParam estado_id string Estado do cacífo(id).
     * @bodyParam tamanho_id string Tamanho do cacífo(id).
     * @bodyParam localizacao_id string Localização do cacífo(id).
     * 
     * @response {
     *   "msg": "Success",
     *   "code": 200,
     *   "data": {
     *     "id": 21,
     *     "numero": 1,
     *     "temperatura": "20",
     *     "codigo": "UNLOCK",
     *     "tamanho_id": 4,
     *     "estado_id": 2,
     *     "localizacao_id": 5,
     *     "tamanho": {
     *       "id": 4,
     *       "tamanho": "L"
     *     },
     *     "estado": {
     *       "id": 2,
     *       "estado": "Disponivel"
     *     },
     *     "localizacao": {
     *       "id": 5,
     *       "nome": "Borer Avenue",
     *       "lat": "87.823365",
     *       "long": "101.362484"
     *     }
     *   }
     * }
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Cacifo  $cacifo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cacifo $cacifo)
    {

        try {

            $request = $request->only(
                ['numero', 'tamanho_id', 'estado_id', 'localizacao_id', 'temperatura', 'codigo']
            );

            $cacifo->update($request);

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_OK,
                'data' => new CacifoResource($cacifo),
            ], Response::HTTP_OK);

        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }

    /**
     * Delete Cacifo.
     * Apaga um cacifo em específico.
     * 
     * @response {
     *   "msg": "Seccess",
     *   "code": 200
     * }
     *
     * @param  \App\Model\Cacifo  $cacifo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cacifo $cacifo)
    {
        try {
            $cacifo->delete();

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
