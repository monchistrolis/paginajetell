@extends('layouts.footer')
@extends('layouts.nav')
@extends('layouts.radio')


@section('content')
<div class=" m-5 col-lg-11 col-md-10 col-sm-6 d-flex justify-content-center">
    <h1><u>Evento {{$descripcion->nombre}}</u></h1>
</div>
<div>
    <div class="container mb-3">
        <div class="row col ">
            <div class="col-lg-6 col-md-6  d-flex justify-content-center" style="object-fit: cover;">
                <img class="imgver mb-2" src="{{asset('storage').'/'.$descripcion->imagen}}" alt="eventos">
            </div>
            <div class="col-lg-6 col-md-6 p-4">
                <h3>Descripción de Evento</h3>
                <p>{{$descripcion->descripcion}}</p>
                <hr>

                <h3>Fecha</h3>
                <p>{{$descripcion->fecha}}</p>
                <hr>
                <h3>Hora</h3>
                <p>{{$descripcion->hora}}</p>
                <hr>
                <h3>Lugar</h3>
                <p>{{$descripcion->lugar}}</p>
               
        </div>
    </div>
</div>

@endsection
