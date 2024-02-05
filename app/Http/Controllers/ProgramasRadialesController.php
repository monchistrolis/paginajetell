<?php

namespace App\Http\Controllers;

use App\Models\ProgramasRadiales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramasRadialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programasRadiales['programas'] =ProgramasRadiales::all();
        $cantidadProgramas ['cantidad'] = ProgramasRadiales::count(); // Obtener el total de peticiones
        return view('general.programasRadiales', $programasRadiales,);
    }

    public function indexAdmin()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $programasRadiales['programas'] = ProgramasRadiales::orderByRaw("
        CASE 
            WHEN dias = 'lunes' THEN 1
            WHEN dias = 'martes' THEN 2
            WHEN dias = 'martes a viernes' THEN 3
            WHEN dias = 'miércoles' THEN 4
            WHEN dias = 'jueves' THEN 5
            WHEN dias = 'viernes' THEN 6
            WHEN dias = 'sábado' THEN 7
            WHEN dias = 'domingo' THEN 8
            ELSE 9 -- Orden adicional para otros casos
        END
    ")->orderBy('horario', 'asc')->get();
    
    return view('admin.programasRadiales', $programasRadiales);
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
    
            $programaData['imagen'] = implode(',', $imagenesPaths); // Guardar rutas de imágenes como cadena separada por comas
        }
    
        ProgramasRadiales::insert($programaData);
    
        return redirect('programasRadialesAdmin')->with('mensaje', 'Evento agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProgramasRadiales  $programasRadiales
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramasRadiales $programasRadiales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProgramasRadiales  $programasRadiales
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $programasRadiales=ProgramasRadiales::findOrFail($id);
        return view('admin.programasRadiales', compact('programasRadiales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProgramasRadiales  $programasRadiales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProgramasRadiales  $programasRadiales
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programas = ProgramasRadiales::find($id);
        $programas->delete();
        return redirect()->route('programasRadialesAdmin');
    }
}
