<?php

namespace App\Http\Controllers;

use App\Models\gerente;
use App\Http\Requests\StoregerenteRequest;
use App\Http\Requests\UpdategerenteRequest;

class GerenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoregerenteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregerenteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gerente  $gerente
     * @return \Illuminate\Http\Response
     */
    public function show(gerente $gerente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gerente  $gerente
     * @return \Illuminate\Http\Response
     */
    public function edit(gerente $gerente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategerenteRequest  $request
     * @param  \App\Models\gerente  $gerente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategerenteRequest $request, gerente $gerente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gerente  $gerente
     * @return \Illuminate\Http\Response
     */
    public function destroy(gerente $gerente)
    {
        //
    }
}
