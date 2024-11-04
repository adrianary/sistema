<?php

namespace App\Http\Controllers;

use App\Models\reporte;
use App\Http\Requests\StorereporteRequest;
use App\Http\Requests\UpdatereporteRequest;

class ReporteController extends Controller
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
     * @param  \App\Http\Requests\StorereporteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorereporteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function show(reporte $reporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit(reporte $reporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatereporteRequest  $request
     * @param  \App\Models\reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatereporteRequest $request, reporte $reporte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(reporte $reporte)
    {
        //
    }
}
