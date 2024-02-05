<?php

namespace App\Http\Controllers;

use App\Models\PeticionOrecion;
use Illuminate\Http\Request;

class PeticionOrecionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $peticiones = PeticionOrecion::all();
    $cantidadPeticiones = $peticiones->count(); // Obtener el total de peticiones

    return view('general.peticionesOracion', [
        'peticiones' => $peticiones,
        'cantidadPeticiones' => $cantidadPeticiones // Pasar la cantidad a la vista
    ]);
}

    public function Admin()
    {
        $peticiones = PeticionOrecion::all();
        return view('admin.peticionesOracion', ['peticiones' => $peticiones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('general.peticionesOracion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peticionOracion = $request->except('_token');
        PeticionOrecion::insert($peticionOracion);
        return redirect()->route('peticionOracion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PeticionOrecion  $peticionOrecion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PeticionOrecion  $peticionOrecion
     * @return \Illuminate\Http\Response
     */
    public function edit(PeticionOrecion $peticionOrecion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PeticionOrecion  $peticionOrecion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeticionOrecion $peticionOrecion)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PeticionOrecion  $peticionOrecion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peticionItem = PeticionOrecion::find($id);
        $peticionItem->delete();
        return redirect()->route('peticionOracionAdmin');

    }
}
