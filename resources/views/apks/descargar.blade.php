@extends('layouts.footer')
@extends('layouts.nav')
@extends('layouts.radio')

<!-- resources/views/apks/create.blade.php -->
@section('content')
    <div class="tituloDescarga">
        <h1>
            Descarga de Materia
        </h1>

    </div>
    <div class="contenederTextoDescarga col-lg-12 col-md-12 col-sm-12 col-12">
        <p class="textoDescarga col-lg-8 col-md-10 col-sm-10 col-10">
            Descubre recursos inspiradores que alimentarán tu fe y fortalecerán tu camino espiritual. tenemos todo lo
            que necesitas para nutrir tu
            relación con Dios.

            Explora nuestra colección ahora y permite que estos archivos sean instrumentos de bendición en tu vida.
            ¡Descarga con fe y que Dios te guíe en cada paso!

            Bendiciones, Ministerio Evangelistico Jesús Te Llama (JETELL)
        </p>
    </div>

    </div>
    <div class="container carddesca">
        <div class="row col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
            @foreach ($apks as $apk)
                <div class="col-lg-3 col-md-6 col-sm-6 col-10">
                    <div class="cardDescarga ">
                        <div class="card-bodyDescarga">
                            <div class="categoria d-flex justify-content-end mx-2">
                                <p class="textCategoria">{{$apk->categoria}}</p>
                            </div>
                            <div class="titulodescarga">
                                <h5 class="card-titulo text-center">{{ $apk->nombre }}</h5>
                            </div>
                            <div class="imgdescarga">
                                <img class="imgdescargas" src="{{ asset('images/logoRadio.jpg') }}" alt="radio">
                            </div>
                            <p class="card-text text-center">Este Archivo fue hecho para ti.</p>
                            <div class="btnDescarga">
                                <a href="{{ route('apks.descargar', $apk->id) }}" class="btn btn-primary">Descargar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
