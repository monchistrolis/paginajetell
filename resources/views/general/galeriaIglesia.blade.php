@extends('layouts.footer')
@extends('layouts.nav')
@extends('layouts.radio')


@section('content')
    <div class=" d-flex justify-content-center mt-2" title="Titulo">
        <h1>
            Nuestra Galeria
        </h1>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            @foreach ($imagenes as $imagen)
                <img class=" imagenesGaleria p-2 col-lg-3 col-md-6" src="{{ asset('storage') . '/' . $imagen->imagen }}" alt="Galeria">
            @endforeach
        </div>
    </div>
    </div>
@endsection
