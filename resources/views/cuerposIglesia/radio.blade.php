@extends('layouts.footer')
@extends('layouts.nav')



@section('content')
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
    <div class="container">
        <div class="imgvarones">
            <img class="imagenvarones mt-3" src="{{ asset('images/logoRadio.jpg') }}" alt="">
        </div>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="alert alert-primary col-8 " role="alert">
                <div>
                    <h1 class="text-center ">Metas y Objetivos</h1>
                    <p>La meta del nuestra Radio (sintonia Clave) iglesia Jetell es proveer un punto común en donde toda la
                        congregacion puedan converger dentro del cuerpo de la iglesia , a fin de llegar a mas personas la
                        quien la escuchen.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row col-8">
            <div class="alert alert-primary" role="alert">
                <h2 class="text-center">La radio existe para:</h2>
            </div>
        </div>
    </div>
    <div>
        <blockquote class="d-flex justify-content-center">
            Haz click para ver los Objetivos <img src="{{ asset('images/cursor.png') }}" alt="" style="width: 2%">
        </blockquote>

    </div>


    <div class="container mb-5">
        <div class="row col-8 acordionexterior">
            <div class="accordion" id="accordionFlushExample">
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Objetivo 1
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            *Orientar al auditor de la Iglesia local o persona externa tenga un encuentro con las sagradas
                            escrituras con el propósito de
                            aprender acerca de la verdad, lo que Dios demanda y ofrece para todo aquel que cree.
                        </div>
                    </div>
                </div>
                <!-- Repite el siguiente bloque para cada objetivo -->
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Objetivo 2
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            *Apoyar al auditor en el desarrollo de una vida de oración efectiva con Dios.
                        </div>
                    </div>
                </div>
                <!-- Repite el siguiente bloque para cada objetivo -->
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Objetivo 3
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            *Guiar a los auditores en el servicio a través de una experiencia personal e íntima con Dios.
                        </div>
                    </div>
                </div>
                <!-- Repite el siguiente bloque para cada objetivo -->
                <div class="accordion-item ">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Objetivo 4
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            *Ayudar a los auditores a descubrir y trabajar en el perfeccionamiento sus dones espirituales
                        </div>
                    </div>
                    <!-- Repite el siguiente bloque para cada objetivo -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                Objetivo 5
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                *Promover la ética cristiana en la vida personal, familiar y social.
                            </div>
                        </div>
                    </div>
                    <!-- Repite el siguiente bloque para cada objetivo -->
                    <div class="accordion-item ">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                aria-controls="flush-collapseSeven">
                                Objetivo 6
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                * Desarrollar ciudadanos cristianos responsables y servidores en el bienestar de la
                                comunidad.
                            </div>
                        </div>
                    </div>
                    <!-- Repite el siguiente bloque para cada objetivo -->
                    <div class="accordion-item ">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseEight" aria-expanded="false"
                                aria-controls="flush-collapseEight">
                                Objetivo 7
                            </button>
                        </h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                *Promover el evangelismo a través de distintos medios y actividades sociales.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
