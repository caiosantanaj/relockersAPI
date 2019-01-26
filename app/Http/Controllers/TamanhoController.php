<?php

namespace App\Http\Controllers;

use App\Model\Tamanho;
use Illuminate\Http\Request;
use App\Http\Resources\Tamanho\TamanhoCollection;
use App\Http\Resources\Tamanho\TamanhoResource;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\TamanhoRequest;

class TamanhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TamanhoCollection::collection(Tamanho::all());
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
     * Display the specified resource.
     *
     * @param  \App\Model\Tamanho  $tamanho
     * @return \Illuminate\Http\Response
     */
    public function show(Tamanho $tamanho)
    {
        return new TamanhoResource($tamanho);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Tamanho  $tamanho
     * @return \Illuminate\Http\Response
     */
    public function edit(Tamanho $tamanho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
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
     * Remove the specified resource from storage.
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
