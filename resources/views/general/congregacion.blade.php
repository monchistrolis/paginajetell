@extends('layouts.footer')
@extends('layouts.nav')
@extends('layouts.radio')



@section('content')
    <div>
        <ul class="nav justify-content-center mt-2">
            <li class="nav-item">
                <a class="nav-link varones" href="varones">Varones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mujeres" href="mujeres">Mujeres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link jovenes" href="jovenes">Jovenes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ninos" href="ninos">Niños</a>
            </li>
            <li class="nav-item">
                <a class="nav-link pastores" href="pastores">Pastores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link radio" href="radio">Radio</a>
            </li>
        </ul>
        <div class="d-flex justify-content-center">
            <hr class=" lineaDivisora col-8">
        </div>
    </div>


    <div class="conainer m-4">
        <div class="row">
            <div class="col-12">
                <h1 class=" text-center">Nuestros Templos</h1>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row col-12 aliniacion">
            <div class="col-md-8 conigleas">
                <img class="imgiglesia" src="{{ asset('images/casamatriz.jpg') }}" alt="iglesias jetell">
                <div class="overlay">
                    <img class="imgpastores" src="{{ asset('images/pasfpass.png') }}" alt="Pastores">
                    <h3 class="nomPastores">Pastores Francisco M. & Sandra A.</h3>
                </div>
            </div>
            <div class="col-md-4 cuerpoigle ">
                <p>Casa matriz ubicada en Av.Nueva Colina Nº19 en la comuna de Colina, </p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <hr class=" lineaDivisora col-8">
    </div>
    <div class="container">
        <div class="row col-12 aliniacion">
            <div class="col-md-4 cuerpoigle d-flex align-items-center justify-content-center">
                <p>Casa matriz ubicada en Av.Nueva Colina Nº19 en la comuna de Colina, </p>
            </div>
            <div class="col-md-8 conigleas">
                <img class="imgiglesia" src="{{ asset('images/casamatriz.jpg') }}" alt="iglesias jetell">
                <div class="overlay">
                    <img class="imgpastores" src="{{ asset('images/pmpe.png') }}" alt="Pastores">
                    <h3 class="nomPastores">Pastores Mauricio D. & Elizabeth M.</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <hr class=" lineaDivisora col-8">
    </div>
    <div class="container">
        <div class="row col-12 aliniacion">
            <div class="col-md-8 conigleas">
                <img class="imgiglesia" src="{{ asset('images/chepica.jpg') }}" alt="iglesias jetell">
                <div class="overlay">
                    <img class="imgpastores" src="" alt="Pastores">
                    <h3 class="nomPastores">Encargado David S. & Maria C.</h3>
                </div>
            </div>
            <div class="col-md-4 cuerpoigle d-flex align-items-center justify-content-center">
                <p>chepica </p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <hr class=" lineaDivisora col-8">
    </div>
    <div class="container">
        <div class="row col-12 aliniacion">
            <div class="col-md-4 cuerpoigle d-flex align-items-center justify-content-center">
                <p>bellavista</p>
            </div>
            <div class="col-md-8 conigleas">
                <img class="imgiglesia" src="{{ asset('images/bellavista.jpg') }}" alt="iglesias jetell">
                <div class="overlay">
                    <img class="imgpastores" src="" alt="Pastores">
                    <h3 class="nomPastores">Pastores Raul S.</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
