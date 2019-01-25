<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Localizacao;
use App\Http\Requests\LocalizacaoRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Localizacao\LocalizacaoCollection;
use App\Http\Resources\Localizacao\LocalizacaoResource;

class LocalizacaoController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Display the specified resource.
     *
     * @param  \App\Model\Localizacao  $localizacao
     * @return \Illuminate\Http\Response
     */
    public function show(Localizacao $localizacao)
    {
        return new LocalizacaoResource($localizacao);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Localizacao  $localizacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Localizacao $localizacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Localizacao  $localizacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Localizacao $localizacao)
    {
        try {

            $request = $request->only(['nome', 'latitude', 'longitude']);

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
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Localizacao  $localizacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Localizacao $localizacao)
    {
        //
    }
}
