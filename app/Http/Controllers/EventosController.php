<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infoEvento['info'] = Eventos::all();
        return view('general.eventos', $infoEvento);
    }


    public function indexAdmin()
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
        $infoEvento['info'] = Eventos::all();
        return view('admin.eventos', $infoEvento);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eventosData = $request->except('_token', 'imagen'); // Excluir 'imagen' para tratarlo por separado

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

        $eventosData['imagen'] = implode(',', $imagenesPaths); // Guardar rutas de imágenes como cadena separada por comas

        Eventos::insert($eventosData);

        return redirect('eventosAdmin')->with('mensaje', 'Evento agregado con éxito');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $descripcion = Eventos::find($id);
        $imagenes = [];

        return view('general.verEventos', compact('descripcion', 'imagenes'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit(Eventos $eventos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eventos $eventos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventos = Eventos::find($id);
        $eventos->delete();
        return redirect()->route('eventosAdmin');
    }
}
