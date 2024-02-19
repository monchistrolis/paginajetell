<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apk;
use Illuminate\Support\Facades\Storage;

class ApkController extends Controller
{
    public function index()
    {
        // Mostrar la lista de archivos APK
        $apks = Apk::all();
        return view('apks.index', compact('apks'));
    }

    public function carga()
    {
        // Mostrar la lista de archivos APK
        $apks = Apk::all();
        return view('apks.carga', compact('apks'));
    }

    public function create()
    {
        // Mostrar el formulario para cargar un archivo APK
        return view('apks.create');
    }

    public function mostrarDescargas()
    {
        $apks = Apk::all();
        return view('apks.descargar', compact('apks'));
    }


    public function store(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'nombre' => 'required',
            'categoria' => 'required',
            'archivo' => 'required|file',
        ]);

        // Obtener el archivo cargado
        $archivo = $request->file('archivo');

        // Generar un nombre único para el archivo
        $nombreArchivo = time() . '_' . $archivo->getClientOriginalName();

        // Guardar el archivo en el almacenamiento
        $archivo->storeAs('archivos', $nombreArchivo);

        // Crear una nueva entrada en la base de datos para el archivo cargado
        Apk::create([
            'nombre' => $request->nombre,
            'categoria' => $request->categoria,
            'archivo' => $nombreArchivo,
        ]);

        // Redireccionar con un mensaje de éxito
        return redirect()->route('carga')->with('success', 'Archivo cargado correctamente.');
    }


    public function descargar($id)
    {
        // Encontrar el archivo APK por su ID
        $apk = Apk::findOrFail($id);

        // Obtener la ruta del archivo APK en el almacenamiento
        $rutaArchivo = storage_path('app/archivos/' . $apk->archivo);

        // Verificar si el archivo existe
        if (!file_exists($rutaArchivo)) {
            // Si no existe, retornar una respuesta de error
            return response()->json(['error' => 'Archivo no encontrado'], 404);
        }

        // Obtener la extensión del archivo basada en su nombre
        $extension = pathinfo($rutaArchivo, PATHINFO_EXTENSION);

        // Retornar la descarga del archivo APK con la extensión correcta
        return response()->download($rutaArchivo, $apk->nombre . '.' . $extension);
    }

    public function vista($id)
    {
        // Obtener el modelo correspondiente al archivo
        $apk = Apk::findOrFail($id);

        // Obtener la ruta del archivo
        $archivo = storage_path('app/archivos/' . $apk->nombre);

        // Verificar si el archivo existe
        if (!Storage::exists('archivos/' . $apk->nombre)) {
            abort(404);
        }

        // Obtener la extensión del archivo
        $extension = pathinfo($archivo, PATHINFO_EXTENSION);

        // Verificar si la extensión del archivo es PDF o DOC/DOCX
        if ($extension !== 'pdf' && $extension !== 'doc' && $extension !== 'docx') {
            abort(404); // Si el archivo no es PDF ni DOC/DOCX, mostrar error 404
        }

        // Retornar la vista del archivo con los datos necesarios
        return view('apks.descargar', compact('archivo', 'apk'));
    }
   
}
