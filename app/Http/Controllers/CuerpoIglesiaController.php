<?php

namespace App\Http\Controllers;

use App\Models\CuerpoIglesia;
use Illuminate\Http\Request;

class CuerpoIglesiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('general.cuerpoIglesia');
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
     * @param  \App\Models\CuerpoIglesia  $cuerpoIglesia
     * @return \Illuminate\Http\Response
     */
    public function show(CuerpoIglesia $cuerpoIglesia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CuerpoIglesia  $cuerpoIglesia
     * @return \Illuminate\Http\Response
     */
    public function edit(CuerpoIglesia $cuerpoIglesia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CuerpoIglesia  $cuerpoIglesia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CuerpoIglesia $cuerpoIglesia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CuerpoIglesia  $cuerpoIglesia
     * @return \Illuminate\Http\Response
     */
    public function destroy(CuerpoIglesia $cuerpoIglesia)
    {
        //
    }
}
