@extends('layouts.footer')
@extends('layouts.nav')
@extends('layouts.radio')




@section('content')
    @php
        $meses = [
            'January' => 'Enero',
            'February' => 'Febrero',
            'March' => 'Marzo',
            'April' => 'Abril',
            'May' => 'Mayo',
            'June' => 'Junio',
            'July' => 'Julio',
            'August' => 'Agosto',
            'September' => 'Septiembre',
            'October' => 'Octubre',
            'November' => 'Noviembre',
            'December' => 'Diciembre',
        ];
        $mesActual = now()->format('F');
        $mesEnEspanol = $meses[$mesActual];
    @endphp
    @if ($info->isEmpty())
        <div class="container mt-5 ">
            <div class="row">
                

                <h1 class="d-flex justify-content-center text-uppercase">No hay Evento en {{ $mesEnEspanol }}</h1>
                <img src="{{ asset('images/opss.png') }}" alt="noHayEvento">
            </div>
        </div>
    @else
        <div class="container mt-5">
            <div class="row">
                <h1 class="d-flex justify-content-center text-uppercase">Eventos del Mes de {{ $mesEnEspanol }}</h1>
            </div>
        </div>
        <div class="containe col">
            <div class="card-deck">
                <a id="eventos">
                    <div class="container mb-4">
                        <div class="row d-flex justify-content-center mt-5">
                            @foreach ($info as $info)
                                <div class="card2 col-10 col-md-10 col-sm-6 m-4  peticion-card">
                                    <div class="card-title">
                                        <h4 class="card-title text-center mt-2 text-uppercase text-white">
                                            {{ $info->nombre }}
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        @if ($info->imagen)
                                            <img class="imgevento card-img-top" src="{{ asset('storage') . '/' . $info->imagen }}"
                                                alt="Evento">
                                        @endif
                                        <div class="d-flex justify-content-center">
                                            <a class="btnver" href="{{url ('ver',[$info->id])}}"> ver</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            @endforeach
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endif
@endsection
