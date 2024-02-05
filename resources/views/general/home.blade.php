@extends('layouts.footer')

@extends('layouts.nav')
@extends('layouts.radio')



@section('content')
    <div id="carouselExampleIndicators" class="carousel slide m-1">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/41.jpg') }}" class="d-block w-100" alt="carrusel1" style="height: 65vh">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/1.jpg') }}" class="d-block w-100" class="img-fluid" alt="carrusel2"
                    style="height: 65vh">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/inicio.jpg') }}" class="d-block w-100" class="img-fluid" alt="carrusel3"
                    style="height: 65vh">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class=" alertaRedes" role="alert">
        <h2>Redes Sociales</h2>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3 mb-3 col-6 mt-3 col-6 ">
                <a href="https://www.facebook.com/FanPageJetell" target="_blank">
                    <i class="bi bi-facebook" id="facebook"></i>
                </a>
            </div>
            <div class="col-sm-3 mb-3 col-6 mt-3 col-6 ">
                <a href="https://www.instagram.com/ministerio_jetell/" target="_blank">
                    <i class="bi bi-instagram" id="instagram"></i>
                </a>
            </div>
            <div class="col-sm-3 mb-3 col-6 mt-3 col-6 ">
                <a href="https://api.whatsapp.com/send?phone=56968189644" target="_blank">
                    <i class="bi bi-whatsapp" id="whatsapp"></i>
                </a>
            </div>
            <div class="col-sm-3 mb-3 col-6 mt-3 col-6 ">
                <a href="https://www.youtube.com/@ministerioevangelisticojes379" target="_blank">
                    <i class="bi bi-youtube" id="youtube"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body text-white text-center">
                        <h2 class="card-title">MISIÓN</h2>
                        <p class="card-text lh-lg">CONCISTE EN ORIENTAR A LA SOCIEDAD HACIA LAS SAGRADAS ESCRITURAS PARA QUE
                            PUEDAN TENER UN ENCUENTRO PERSONAL CON EL DIOS ETERNO.
                            <br>
                            Y CONOCEREIS LA VERDAD Y LA VERDAD OS HARA LIBRES
                            <br>
                            JUAN 8:32
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card text-center">
                    <div class="card-body text-white text-center">
                        <h2 class="card-title">VISIÓN</h2>
                        <p class="card-text lh-lg">ES CONSTRIBUIR A LA MORAL PARA CREAR CONCIENCIA A LAS PERSONAS CON
                            EL FIN DE
                            HACER UN SER HUMANO MAS INTEGRAL
                            Y CONOCEREIS LA VERDAD Y LA VERDAD OS HARA LIBRES .<br>

                            JUAN 8:32</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- video --}}
    <div class="container">
        <div class="row col-10">
            <div>
                <h2 class="text-center">Culto Dominical</h2>
            </div>
            <div class="container col-xxl-12 col-lg-12 col-md-12 col-sm-8 col-5">
                <iframe class="videoYoutube" width="720" height="500"
                    src="https://www.youtube.com/embed/s1NI-1WTr1g?si=oEYXhnsMPnSfOPxR" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
@endsection
