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

class EncomendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EncomendaCollection::collection(Encomenda::all());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clientesEncomenda(Cliente $cliente)
    {
        return EncomendaResource::collection($cliente->encomendas);
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
    public function store(EncomendaRequest $request)
    {

        try {

            $observacoes = ($request['observacoes'] === null) ? "Nenhuma observação." : $request['observacoes'];

            $request = $request->only([
                'data_estimada', 'data_de_entrega', 'data_de_levantamento',
                'data_de_entrada_no_sistema', 'data_de_entrega_pretendida', 'tempo_limite_de_levantamento',
                'temperatura', 'observacoes', 'cliente_id', 'cacifo_id',
            ]);

            $encomenda = new Encomenda;
            $encomenda->data_estimada = $request['data_estimada'];
            $encomenda->data_de_entrega = $request['data_de_entrega'];
            $encomenda->data_de_levantamento = $request['data_de_levantamento'];
            $encomenda->data_de_entrada_no_sistema = $request['data_de_entrada_no_sistema'];
            $encomenda->data_de_entrega_pretendida = $request['data_de_entrega_pretendida'];
            $encomenda->tempo_limite_de_levantamento = $request['tempo_limite_de_levantamento'];
            $encomenda->temperatura = $request['temperatura'];
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
     * Display the specified resource.
     *
     * @param  \App\Model\Encomenda  $encomenda
     * @return \Illuminate\Http\Response
     */
    public function show(Encomenda $encomenda)
    {
        return new EncomendaResource($encomenda);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Encomenda  $encomenda
     * @return \Illuminate\Http\Response
     */
    public function edit(Encomenda $encomenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
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
                'temperatura', 'observacoes', 'cliente_id', 'cacifo_id',
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
     * Remove the specified resource from storage.
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
