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
 * APIs for managing cacifos
 */
class CacifoController extends Controller
{
    /**
     * Get Cacifos
     *
     * Get all "cacifos" from database
     *
     */
    public function index()
    {
        return CacifoCollection::collection(Cacifo::all());
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
     * Display the specified resource.
     *
     * @param  \App\Model\Cacifo  $cacifo
     * @return \Illuminate\Http\Response
     */
    public function show(Cacifo $cacifo)
    {
        return new CacifoResource($cacifo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Cacifo  $cacifo
     * @return \Illuminate\Http\Response
     */
    public function edit(Cacifo $cacifo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
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

            // $cacifo->codigo = $request['codigo'];

            // $cacifo->save();

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
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Cacifo  $cacifo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cacifo $cacifo)
    {
        //
    }
}
