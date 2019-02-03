<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Localizacao;
use App\Http\Requests\LocalizacaoRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Localizacao\LocalizacaoCollection;
use App\Http\Resources\Localizacao\LocalizacaoResource;

/**
 * @group Localizacaos management
 *
 * Endpoint para controlar a APIs as localizacoes
 * 
 */
class LocalizacaoController extends Controller
{
    /**
     * Get Localizacao.
     * 
     * Mostra todas as localizações.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LocalizacaoCollection::collection(Localizacao::all())->additional([
            'msg' => 'Success',
            'code' => Response::HTTP_OK,
        ]);
    }

    /**
     * Post Localizacao
     *
     * Adiciona uma nova localizacao.
     * 
     * @bodyParam nome string required Nome da localização.
     * @bodyParam lat float required Latitude da localização.
     * @bodyParam long float required Longitude da localização.
     * @bodyParam codigo_postal string required Código-postal da localização.
     * @bodyParam cidade string required Cidade da localização.
     * 
     * @response{
     *   "msg": "Success",
     *   "code": 201,
     *   "data": {"properties": "localizacaoObject"}
     * }
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocalizacaoRequest $request)
    {
        try {
            $localizacao = new Localizacao($request->all());
            $localizacao->save();

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_CREATED,
                'data' => new LocalizacaoResource($localizacao),
            ], Response::HTTP_CREATED);

        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get uma localizacao.
     * 
     * Mostra uma localização detalhada.
     *
     * @param  \App\Model\Localizacao  $localizacao
     * @return \Illuminate\Http\Response
     */
    public function show(Localizacao $localizacao)
    {
        return new LocalizacaoResource($localizacao);
    }

    /**
     * Update Localizacao.
     * 
     * Atualiza uma localizacao.
     * 
     * @bodyParam nome string Nome da localização.
     * @bodyParam latitude string Latitude da localização.
     * @bodyParam longitude string Longitude da localização.
     * @bodyParam codigo_postal string required Código-postal da localização.
     * @bodyParam cidade string required Cidade da localização.
     * 
     * @response{
     *   "msg": "Success",
     *   "code": 200,
     *   "data": {"properties": "localizacaoObject"}
     * }
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Localizacao  $localizacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Localizacao $localizacao)
    {
        try {

            $request = $request->only(['nome', 'latitude', 'longitude', 'codigo_postal', 'cidade']);

            $localizacao->update($request);

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_OK,
                'data' => new LocalizacaoResource($localizacao),
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Delete Localizacao
     * 
     * Apaga uma localizacao.
     * 
     * @response {
     *   "msg": "Seccess",
     *   "code": 200
     * }
     *
     * @param  \App\Model\Localizacao  $localizacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Localizacao $localizacao)
    {
        try {
            $localizacao->delete();

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
