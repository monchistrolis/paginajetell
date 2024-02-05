@extends('layouts.footer')
@extends('layouts.nav')

@section('content')
    <div class="container-fluid d-flex justify-content-center mt-5">
        <h1>
            Peticiones de Oración
        </h1>
    </div>
    <div class="row d-flex justify-content-center mt-5">
            @foreach ($peticiones as $peticion)
                <div class="card col-8 mb-4 peticion-card">
                    <div class="card-body">
                        <h4 class="card-title text-center text-uppercase text-white">{{ $peticion->nombrepersona1 }} pide
                            oración por:
                            {{ $peticion->nombrepersona2 }}</h4>
                        <h5 class="card-subtitle mb-4 blockquote text-center text-white">Petición</h5>
                        <p class="card-text blockquote-footer text-center display-5">{{ $peticion->peticion }}</p>
                    </div>
                    <div class="d-flex justify-content-around mb-2">
                        <form action="{{ route('peticionOracionAdmin.destroy', $peticion->id) }}" method="POST">
                            @csrf
                            {{@method_field('DELETE')}}
                            <button class="cardbtn btn"style="background-color:#1488CC" value="Borrar"
                                onclick="return confirm('Quiere Borrar Peticion? de {{$peticion->nombrepersona2}}')">Eliminar peticion</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
@endsection
