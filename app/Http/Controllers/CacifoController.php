<?php

namespace App\Http\Controllers;

use App\Model\Cacifo;
use Illuminate\Http\Request;
use App\Http\Resources\Cacifo\CacifoCollection;
use App\Http\Resources\Cacifo\CacifoResource;

class CacifoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
    public function store(Request $request)
    {
        //
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
        //
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
