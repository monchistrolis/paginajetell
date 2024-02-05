<?php

namespace App\Http\Controllers;

use App\Models\GaleriaIglesia;
use Illuminate\Http\Request;

class GaleriaIglesiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imagenes = GaleriaIglesia::all();
        return view('general.galeriaIglesia', compact('imagenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeriaAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programaData = $request->except('_token', 'imagen'); // Excluir 'imagen' para tratarlo por separado

        if ($request->hasFile('imagen')) {
            $imagenes = $request->file('imagen');
            $imagenesPaths = [];

            foreach ($imagenes as $imagen) {
                if ($imagen->isValid()) {
                    $filePath = $imagen->store('uploads', 'public');
                    $imagenesPaths[] = $filePath;
                } else {
                    return redirect()->back()->with('error', 'Error uploading image');
                }
            }
        }

        $programaData['imagen'] = implode(',', $imagenesPaths); // Guardar rutas de imágenes como cadena separada por comas

        GaleriaIglesia::insert($programaData);

        return redirect('galeriaAdmin')->with('mensaje', 'Evento agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GaleriaIglesia  $galeriaIglesia
     * @return \Illuminate\Http\Response
     */
    public function show(GaleriaIglesia $galeriaIglesia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GaleriaIglesia  $galeriaIglesia
     * @return \Illuminate\Http\Response
     */
    public function edit(GaleriaIglesia $galeriaIglesia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GaleriaIglesia  $galeriaIglesia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GaleriaIglesia $galeriaIglesia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GaleriaIglesia  $galeriaIglesia
     * @return \Illuminate\Http\Response
     */
    public function destroy(GaleriaIglesia $galeriaIglesia)
    {
        //
    }
}
