<?php

namespace App\Http\Controllers;

use App\Models\cliennte;
use App\Http\Requests\StorecliennteRequest;
use App\Http\Requests\UpdatecliennteRequest;

class CliennteController extends Controller
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
     * @param  \App\Http\Requests\StorecliennteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecliennteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliennte  $cliennte
     * @return \Illuminate\Http\Response
     */
    public function show(cliennte $cliennte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliennte  $cliennte
     * @return \Illuminate\Http\Response
     */
    public function edit(cliennte $cliennte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecliennteRequest  $request
     * @param  \App\Models\cliennte  $cliennte
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecliennteRequest $request, cliennte $cliennte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliennte  $cliennte
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliennte $cliennte)
    {
        //
    }
}
