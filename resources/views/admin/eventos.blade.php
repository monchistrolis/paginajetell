@extends('layouts.nav')
@section('content')
    <div class="d-flex justify-content-center mt-5">
        <h1>Eventos Proximos</h1>
    </div>
    <div class="container col d-flex justify-content-center mt-3">
        <div class="row col-8">
            <form class="col-md-10 col-sm-6 col-12" action="{{ route('eventosAdmin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre Evento:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required
                        placeholder="Nombre Del Evento">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required
                        placeholder="Descripcion Del Evento">
                </div>
                <div class="form-group">
                    <label for="nombre">Fecha:</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" required
                        placeholder="Fecha Del Evento">
                </div>
                <div class="form-group">
                    <label for="lugar">Lugar o Direccion:</label>
                    <input class="form-control" type="text" id="lugar" name="lugar" placeholder="Lugar Del Evento">
                </div>
                <div class="form-group col-4">
                    <label for="hora">Hora:</label>
                    <input type="time" class="form-control col-6" id="hora" name="hora" required
                        placeholder=" Del Evento">
                </div>
                <div class="custom-file">
                    <label class="custom-file-label" for="fotos">Fotos:</label>
                    <br>
                    <input class="col-md-10 col-sm-6 col-12" type="file" class="custom-file-input boton form-control-file mb-1 mt-2" id="imagen"
                        name="imagen[]" multiple required>
                </div>
                <div class="d-flex justify-content-center ">
                    <button type="submit" class="btn btn-primary mt-2 col-6" value="enviar">Agregar</button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="containe ">
        <div class="card-deck">
            <a id="eventos">
                <div class="container  ">
                    <div class="row d-flex justify-content-center mt-5">
                        @foreach ($info as $info)
                            <div class="card2 col col-md-10 col-sm-3  mb-5 mx-4 peticion-card">
                                <div class="card-title">
                                    <h4 class="card-title text-center mt-2 text-uppercase text-white">
                                        {{ $info->nombre }}
                                    </h4>
                                </div>
                                <div class="card-body">
                                    @if ($info->imagen)
                                        <img class="imgevento card-img-top"
                                            src="{{ asset('storage') . '/' . $info->imagen }}" alt="Evento">
                                    @endif
                                    <div class="d-flex justify-content-center m-3">
                                        <form action="{{ route('verEventos.destroy', $info->id) }}" method="POST">
                                            @csrf
                                            {{ @method_field('DELETE') }}
                                            <button class="cardbtn btn"style="background-color:#1488CC" value="Borrar"
                                                onclick="return confirm('Quiere Borrar el Evento? {{ $info->nombre }}')">Eliminar
                                                Evento</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
