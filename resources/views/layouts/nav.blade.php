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
                <img class="imglogo" src="{{ asset('images/logoigle.png') }}" width="50" height="40" class="rounded"
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
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('carga') }}">
                            <h6 class="text-white"> CARGA DE ARCHIVOS</h6>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>



    @yield('content')
</body>

</html>
