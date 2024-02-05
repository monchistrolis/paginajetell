@extends('layouts.footer')
@extends('layouts.nav')
@extends('layouts.radio')


@section('content')
<div class="d-flex justify-content-center mt-3 ">
    <h1>Programas Radiales
        </h1>
</div>
<div class="d-flex justify-content-center">
    <p>Total de Programas Radiales :  {{ $programas->count() }}</p>
</div>
    <div class="containe col -12">
        <div class="card-deck">
            <a id="eventos">
                <div class="container col ">
                    <div class="row d-flex justify-content-center mt-5">
                        @foreach ($programas as $info)
                            <div class="card2 col-xxl-3 col-xl-3 col-lg-3 col-md-4  col-9 mb-5 mx-4 peticion-card">
                                <div class="card-title">
                                    <h4 class="card-title text-center mt-3 text-uppercase text-white">
                                        {{ $info->nombrePrograma }}
                                    </h4>
                                </div>
                                <div class="card-body">
                                    @if ($info->imagen)
                                        <img class="imgRadio card-img-top" src="{{ asset('storage') . '/' . $info->imagen }}"
                                            alt="ProgramaRadial">
                                    @endif
                                    <h5>
                                        <img class="puntolista " src="{{ asset('images/rec.png') }}"
                                            alt="puntoRadioJetell">{{ $info->integrantes1}}
                                    </h5>
                                    <h5>
                                        <img class="puntolista " src="{{ asset('images/rec.png') }}"
                                            alt="puntoRadioJetell">{{ $info->horario }}
                                    </h5>
                                    <h5>
                                        <img class="puntolista " src="{{ asset('images/rec.png') }}"
                                            alt="puntoRadioJetell">{{ $info->dias }}
                                    </h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
