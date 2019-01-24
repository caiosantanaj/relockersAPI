<?php

namespace App\Http\Controllers;

use App\Model\Cliente;
use Illuminate\Http\Request;
use App\Http\Resources\Cliente\ClienteCollection;
use App\Http\Resources\Cliente\ClienteResource;
use App\Http\Requests\ClienteRequest;
use Symfony\Component\HttpFoundation\Response;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ClienteCollection::collection(Cliente::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request)
    {
        try {
            $cliente = new Cliente($request->all());
            $cliente->save();

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_OK,
                'data' => new ClienteResource($cliente),
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
     * Display the specified resource.
     *
     * @param  \App\Model\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return new ClienteResource($cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
