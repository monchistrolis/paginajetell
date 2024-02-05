@extends('layouts.footer')
@extends('layouts.nav')

@section('content')
    <div class=" d-flex justify-content-center mt-2" title="Titulo">
        <h1>
            Modulo de Agregar Fotos a la Galeria
        </h1>
    </div>

    <div class="container col-12 d-flex justify-content-center mt-3">
        <div class="row col-8">
            <form action="{{route('galeriaAdmin.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="custom-file">
                    <div class="d-flex justify-content-center">
                        <label class="custom-file-label" for="fotos">
                            <h2>Carga tus fotos aqui: </h2>
                        </label>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <input type="file" class="custom-file-input boton form-control-file mb-1 mt-2" id="imagen"
                            name="imagen[]" multiple required>
                    </div>

                </div>
                <div class="d-flex justify-content-center m-3 ">
                    <button type="submit" class="btn btn-primary mt-2 col-6" value="enviar">Agregar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <hr class="col-8">
    </div>
    
@endsection
