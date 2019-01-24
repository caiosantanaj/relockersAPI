<?php

namespace App\Http\Controllers;

use App\Model\Estado;
use Illuminate\Http\Request;
use App\Http\Resources\Estado\EstadoCollection;
use App\Http\Resources\Estado\EstadoResource;
use App\Http\Requests\EstadoRequest;
use Symfony\Component\HttpFoundation\Response;

class EstadoController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:api')->except('index', 'show');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EstadoCollection::collection(Estado::all());
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
    public function store(EstadoRequest $request)
    {
        try {
            $estado = new Estado($request->all());
            $estado->save();

            return response([
                'msg' => 'Success',
                'code' => Response::HTTP_OK,
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
     * Display the specified resource.
     *
     * @param  \App\Model\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        return new EstadoResource($estado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        //
    }
}
