<?php

namespace App\Http\Controllers;

use App\Model\Tamanho;
use Illuminate\Http\Request;
use App\Http\Resources\Tamanho\TamanhoCollection;
use App\Http\Resources\Tamanho\TamanhoResource;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\TamanhoRequest;

/**
 * @group Tamanhos management
 *
 * Endpoint para controlar a APIs os tamanhos
 * 
 */
class TamanhoController extends Controller
{
    /**
     * Get Tamanho
     * 
     * Mostra todos os tamanhos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TamanhoCollection::collection(Tamanho::all());
    }

    /**
     * Post Tamanho
     *
     * Adiciona um novo tamanho.
     * 
     * @bodyParam tamanho string required Tamanho de um cacífo.
     * 
     * @response{
     *   "msg": "Success",
     *   "code": 201,
     *   "data": {"properties": "tamanhoObject"}
     * }
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TamanhoRequest $request)
    {
        try {
            $tamanho = new Tamanho($request->all());
            $tamanho->save();

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_CREATED,
                'data' => new TamanhoResource($tamanho),
            ], Response::HTTP_CREATED);

        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get um tamanho.
     * 
     * Mostra um tamanho detalhado.
     *
     * @param  \App\Model\Tamanho  $tamanho
     * @return \Illuminate\Http\Response
     */
    public function show(Tamanho $tamanho)
    {
        return new TamanhoResource($tamanho);
    }

    /**
     * Update Tamanho.
     * 
     * Atualiza um tamanho.
     * 
     * @bodyParam tamanho string required Tamanho do cacifo.
     * 
     * @response{
     *   "msg": "Success",
     *   "code": 200,
     *   "data": {"properties": "tamanhoObject"}
     * }
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Tamanho  $tamanho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tamanho $tamanho)
    {
        try {

            $request = $request->only(['tamanho']);

            $tamanho->update($request);

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_OK,
                'data' => new TamanhoResource($tamanho)
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Delete tamanho
     * 
     * Apaga um tamanho.
     * 
     * @response {
     *   "msg": "Seccess",
     *   "code": 200
     * }
     *
     * @param  \App\Model\Tamanho  $tamanho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tamanho $tamanho)
    {
        try {
            $tamanho->delete();

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
