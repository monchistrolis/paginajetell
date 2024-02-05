@extends('layouts.footer')


@section('content')
    <div class="d-flex justify-content-center mt-5">
        <h1>Programas Radiales</h1>
    </div>

    <div class="container col-12 d-flex justify-content-center mt-3">
        <div class="row col-8">
            <form action="{{ route('programasRadialesAdmin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre Programa:</label>
                    <input type="text" class="form-control" id="nombrePrograma" name="nombrePrograma" required
                        placeholder="Nombre Del Programa">
                </div>
                <div class="form-group">
                    <label for="descripcion">Dias:</label>
                    <input type="text" class="form-control" id="dias" name="dias" required
                        placeholder="dias del programa Ejemplo: ('lunes,marter,miercoles' o 'lunes a marte')">
                </div>
                <div class="form-group">
                    <label for="nombre">Horario</label>
                    <input type="text" class="form-control" id="Horario" name="Horario" required
                        placeholder="Horario del programa">
                </div>

                <div class="row">
                    <div class="col">
                        <label for="integrante1"> Nombre Integrante 1</label>
                        <input type="text" class="form-control" placeholder="Nombre de Integrante" id="integrantes1"
                            name="integrantes1">
                    </div>
                    <div class="col">
                        <label for="integrante1"> Nombre Integrante 2</label>
                        <input type="text" class="form-control" placeholder="Nombre de Integrante"id="integrantes3"
                            name="integrantes2">
                    </div>
                    <div class="col">
                        <label for="integrante1"> Nombre Integrante 3</label>
                        <input type="text" class="form-control" placeholder="Nombre de Integrante " id="integrantes3"
                            name="integrantes3">
                    </div>

                </div>
                <div class="custom-file">
                    <label class="custom-file-label" for="fotos">Fotos:</label>
                    <br>
                    <input type="file" class="custom-file-input boton form-control-file mb-1 mt-2" id="imagen"
                        name="imagen[]" multiple required>
                </div>


                <div class="d-flex justify-content-center m-5">
                    <button type="submit" class="btn btn-primary mt-2 col-6" value="enviar">Agregar</button>
                </div>

            </form>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <hr class="col-8">
    </div>
    <div>
        <h1 class="text-center mt-5">
            Administrador de Programas Radiales
        </h1>
        <div class="containe col">
            <div class="card-deck">
                <a id="eventos">
                    <div class="container col-12 ">
                        <div class="row d-flex justify-content-center mt-5">
                            @foreach ($programas as $info)
                                <div class="card2 col-3 mb-5 mx-4 peticion-card">
                                    <div class="card-title">
                                        <h4 class="card-title text-center mt-3 text-uppercase text-white">
                                            {{ $info->nombrePrograma }}
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        @if ($info->imagen)
                                            <img class="imgRadio card-img-top"
                                                src="{{ asset('storage') . '/' . $info->imagen }}" alt="ProgramaRadial">
                                        @endif
                                        <h5>
                                            <img class="puntolista " src="{{ asset('images/rec.png') }}"
                                                alt="puntoRadioJetell">{{ $info->integrantes1 }}
                                        </h5>

                                        @if (!is_null($info->integrantes2))
                                            <h5>
                                                <img class="puntolista" src="{{ asset('images/rec.png') }}"
                                                    alt="puntoRadioJetell">
                                                {{ $info->integrantes2 }}
                                            </h5>
                                        @endif
                                        @if (!is_null($info->integrantes3))
                                            <h5>
                                                <img class="puntolista" src="{{ asset('images/rec.png') }}"
                                                    alt="puntoRadioJetell">
                                                {{ $info->integrantes3 }}
                                            </h5>
                                        @endif
                                        <h5>
                                            <img class="puntolista " src="{{ asset('images/rec.png') }}"
                                                alt="puntoRadioJetell">{{ $info->horario }}
                                        </h5>
                                        <h5>
                                            <img class="puntolista " src="{{ asset('images/rec.png') }}"
                                                alt="puntoRadioJetell">{{ $info->dias }}
                                        </h5>
                                        <div class="d-flex justify-content-center m-3">
                                    

                                            <form action="{{ route('programasRadialesAdmin.destroy', $info->id) }}"
                                                method="POST">
                                                @csrf
                                                {{ @method_field('DELETE') }}
                                                <button
                                                    class="cardbtn btn"style="background-color:#93291E ; text-color:white"
                                                    value="Borrar"
                                                    onclick="return confirm('Quiere Borrar el Evento? {{ $info->nombre }}')">Eliminar
                                                    peticion</button>
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
    </div>
@endsection
@extends('layouts.nav')
