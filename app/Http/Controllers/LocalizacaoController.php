<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Localizacao;
use App\Http\Resources\Localizacao\LocalizacaoResource;
use App\Http\Resources\Localizacao\LocalizacaoCollection;

class LocalizacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LocalizacaoCollection::collection(Localizacao::all());
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
        //
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
