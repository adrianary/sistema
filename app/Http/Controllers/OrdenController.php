<?php

namespace App\Http\Controllers;

use App\Models\orden;
use App\Http\Requests\StoreordenRequest;
use App\Http\Requests\UpdateordenRequest;

class OrdenController extends Controller
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
     * @param  \App\Http\Requests\StoreordenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreordenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function show(orden $orden)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function edit(orden $orden)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateordenRequest  $request
     * @param  \App\Models\orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateordenRequest $request, orden $orden)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\orden  $orden
     * @return \Illuminate\Http\Response
     */
    public function destroy(orden $orden)
    {
        //
    }
}
