<?php

namespace App\Http\Controllers;

use App\Model\Estado;
use Illuminate\Http\Request;
use App\Http\Resources\Estado\EstadoCollection;
use App\Http\Resources\Estado\EstadoResource;
use App\Http\Requests\EstadoRequest;
use Symfony\Component\HttpFoundation\Response;

/**
 * @group Estados management
 *
 * Endpoint para controlar a APIs dos estados
 * 
 */
class EstadoController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:api')->except('index', 'show');
    // }

    /**
     * Get Estado
     * 
     * mostra todos os estados.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EstadoCollection::collection(Estado::all());
    }

    /**
     * Post Estado
     *
     * Adiciona um novo estado.
     * 
     * @bodyParam estado string required Estado de um cacífo.
     * 
     * @response{
     *   "msg": "Success",
     *   "code": 201,
     *   "data": {"properties": "estadoObject"}
     * }
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstadoRequest $request)
    {
        try {
            $estado = new Estado($request->all());
            $estado->save();

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_CREATED,
                'data' => new EstadoResource($estado),
            ], Response::HTTP_CREATED);

        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        //
    }

    /**
     * Get um estado.
     * 
     * Mostra um estado detalhado.
     *
     * @param  \App\Model\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        return new EstadoResource($estado);
    }

    /**
     * Update Estado.
     * 
     * Atualiza um estado.
     * 
     * @bodyParam estado string required Nome do estado.
     * 
     * @response{
     *   "msg": "Success",
     *   "code": 200,
     *   "data": {"properties": "estadoObject"}
     * }
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        try {

            $request = $request->only(['estado']);

            $estado->update($request);

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_OK,
                'data' => new EstadoResource($estado),
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Delete Estado
     * 
     * Apaga um estado.
     * 
     * @response {
     *   "msg": "Seccess",
     *   "code": 200
     * }
     *
     * @param  \App\Model\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        try {
            $estado->delete();

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
