@extends('layouts.footer')
<!-- resources/views/apks/create.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/App.css') }}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
    <link rel="icon" href="{{ asset('images/logo2023.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <title>Ministerio Evangelistico Jetell</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a href="{{ route('/') }}">
                <img src="{{ asset('images/logoigle.png') }}" width="50" height="40" class="rounded"
                    alt="LogoJettel">
            </a>
            <button class="navbar-toggler" style="background: white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('nosotros') }}">
                            <h6 class="text-white">NOSOTROS</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('peticionOracion') }}">
                            <h6 class="text-white"> PETICIONES DE ORACIÓN</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('eventos') }}">
                            <h6 class="text-white"> EVENTOS</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('programasRadiales') }}">
                            <h6 class="text-white"> PROGRAMAS RADIALES</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('galeria') }}">
                            <h6 class="text-white"> GALERIA</h6>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('apks.mostrar_descargas') }}">
                            <h6 class="text-white"> DESCARGAS</h6>
                        </a>


                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('carga') }}">
                            <h6 class="text-white"> CARGA DE ARCHIVOS</h6>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>

    </nav>

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
    <div class="container carddesca">
        <div class="row col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
            @foreach ($apks as $apk)
                <div class="col-lg-3 col-md-6 col-sm-6 col-10">
                    <div class="cardDescarga ">
                        <div class="card-bodyDescarga">
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
</body>
@extends('layouts.radio')

