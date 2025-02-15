<?php

namespace App\Http\Controllers;

use App\Models\tecnico;
use App\Http\Requests\StoretecnicoRequest;
use App\Http\Requests\UpdatetecnicoRequest;

class TecnicoController extends Controller
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
     * @param  \App\Http\Requests\StoretecnicoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretecnicoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function show(tecnico $tecnico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function edit(tecnico $tecnico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetecnicoRequest  $request
     * @param  \App\Models\tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetecnicoRequest $request, tecnico $tecnico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function destroy(tecnico $tecnico)
    {
        //
    }
}
