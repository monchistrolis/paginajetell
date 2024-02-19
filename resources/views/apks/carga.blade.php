@extends('layouts.footer')
@extends('layouts.nav')
@extends('layouts.radio')
<!-- resources/views/apks/create.blade.php -->

@section('content')
    <div class="container">
        <div class="row">
            <div class="titulo">
                <h2>Cargar Archivo APK</h2>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="formulario">
                <form action="{{ route('apk.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="">Categoria</label>
                        <select class="form-select" aria-label="Default select example" id="categoria" name="categoria">
                            <option selected>Selecciona la categoria del material a sibir</option>
                            <option value="Materia de Estudio">Materia de Estudio</option>
                            <option value="Libros">Libros</option>
                            <option value="Niños">Niños</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="archivo">Archivo:</label>
                        <input type="file" class="form-control" id="archivo" name="archivo" required>
                    </div>
                    <div class="btnCargar">
                        <button type="submit" class="btn btn-primary">Cargar Archivo</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
