<?php

namespace App\Http\Controllers;

use App\Model\Cliente;
use Illuminate\Http\Request;
use App\Http\Resources\Cliente\ClienteCollection;
use App\Http\Resources\Cliente\ClienteResource;
use App\Http\Requests\ClienteRequest;
use Symfony\Component\HttpFoundation\Response;

/**
 * @group Cliente management
 *
 * Endpoint para controlar a APIs dos clientes
 * 
 */
class ClienteController extends Controller
{
    /**
     * Get Clientes
     * 
     * Lista todos os clientes.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
        return ClienteCollection::collection(Cliente::all());
    }

    /**
     * Post Cliente
     *
     * Adiciona novo cliente.
     * 
     * @bodyParam nome string required Número do cacífo.
     * @bodyParam email string required Temperatura do cacífo.
     * @bodyParam telefone string required Código do cacífo.
     * 
     * @response{
     *   "msg": "Success",
     *   "code": 201,
     *   "data": {
     *     "id": 11,
     *     "nome": "João Rocha",
     *     "email": "jrocha@gmail.com",
     *     "telefone": "911111111"
     *   }
     * }
     * 
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     *
     */
    public function store(ClienteRequest $request)
    {
        try {
            $cliente = new Cliente($request->all());
            $cliente->save();

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_CREATED,
                'data' => new ClienteResource($cliente),
            ], Response::HTTP_CREATED);

        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get um cliente.
     * 
     * Mostra um cliente detalhado.
     *
     * @param  \App\Model\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return new ClienteResource($cliente);
    }

    /**
     * Update Cliente.
     * 
     * Atualiza um cliente.
     * 
     * @response {
     *   "msg": "Success",
     *   "code": 200,
     *   "data": {
     *     "id": 1,
     *     "nome": "Elian Hill",
     *     "email": "jackson32@yahoo.com",
     *     "telefone": "(315) 972-8175 x7324"
     *   }
     * }
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        try {

            $request = $request->only(['nome', 'email', 'telefone']);

            $cliente->update($request);

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_OK,
                'data' => new ClienteResource($cliente),
            ], Response::HTTP_OK);
        } catch (\Exception $e) {
            return response([
                'msg' => $e->getMessage(),
                'code' => Response::HTTP_INTERNAL_SERVER_ERROR,
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Delete Cleinte
     * 
     * Apaga um cliente em específico.
     * 
     * @response {
     *   "msg": "Seccess",
     *   "code": 200
     * }
     *
     * @param  \App\Model\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        try {
            $cliente->delete();

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
