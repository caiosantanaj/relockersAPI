<?php

namespace App\Http\Controllers;

use App\Model\Tamanho;
use Illuminate\Http\Request;
use App\Http\Resources\Tamanho\TamanhoCollection;
use App\Http\Resources\Tamanho\TamanhoResource;

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
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Tamanho  $tamanho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tamanho $tamanho)
    {
        //
    }
}
