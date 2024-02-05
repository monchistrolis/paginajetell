@extends('layouts.footer')
@extends('layouts.nav')
@extends('layouts.radio')


@section('content')
    <div class="container-fluid d-flex justify-content-center mt-5">    
        <h1>
            Peticiones de Oración
        </h1>
    </div>


    <div class="container col-12 d-flex justify-content-center mt-3">
        <div class="row col-8">
            <form action="{{ route('peticionOracion.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nombre">Tu Nombre:</label>
                    <input type="text" class="form-control" id="nombrePersona1" name="nombrePersona1" required
                        placeholder="Quien pide Oracion">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombrePersona2" name="nombrePersona2" required
                        placeholder="Por quien hay que orar">
                </div>
                <div class="form-group">
                    <label for="descripcion">Celular:</label>
                    <input class="form-control" type="text" id="telefono" name="telefono" placeholder="Opcional">
                </div>
                <div class="form-group">
                    <label for="precio">Correo:</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Opcional">
                </div>
                <div class="form-group">
                    <label for="stock">Petición</label>
                    <input type="text" class="form-control" id="peticion" name="peticion" required
                        placeholder="Escribe aqui tu petición">
                </div>
                <div class="d-flex justify-content-center">
                    <input class="btn btn-primary mt-2" type="submit" value="Enviar Petición">
                </div>
            </form>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <hr class="lineaseparacion col-8  ">
    </div>

    <div class="container-fluid">
        <div>
            <h1 class="text-center mt-5">
                Peticiones de Oración
            </h1>
        </div>
        <div class="d-flex justify-content-center">
            <p>Total de Peticiones de Oración: {{ $cantidadPeticiones }}</p>
        </div>

        <div class="row d-flex justify-content-center mt-5">
            @foreach ($peticiones as $peticion)
                <div class="card col-8 mb-4 peticion-card">
                    <div class="card-body">
                        <h4 class="card-title text-center text-uppercase text-white">{{ $peticion->nombrepersona1 }} pide
                            oración por:
                            {{ $peticion->nombrepersona2 }}</h4>
                        <h5 class="card-subtitle mb-4 blockquote text-center text-white">Petición</h5>
                        <p class="card-text blockquote-footer text-center display-5">{{ $peticion->peticion }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
