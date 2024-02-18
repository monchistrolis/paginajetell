<!DOCTYPE html>
<html lang="en">

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

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .ContenedorRadio {
            position: fixed;
            width: 10%;
            bottom: 15px;
            margin-left: 15px;
            border-radius: 15px;
            border: solid 1px #000428;
            box-shadow: 0px 0px 10px 0px #000428;
            display: block;
            text-align: center;
            background: #1488cc;
            background: -webkit-linear-gradient(to right, #2b32b2, #1488cc);
            background: linear-gradient(to right, #2b32b2, #1488cc);
            /* que quede delanto de todo */
            z-index: 1000;
        }

        .tituloReproductor {
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        .botonReproduccion {
            background: #004e92;
            border-radius: 10px;
            color: white;
            margin-top: 10px;
            margin-bottom: 10px;
        }


        .playing {
            background-color: red;
            /* Cambia el color de fondo a rojo cuando se está reproduciendo */
            color: white;
            /* Cambia el color del texto a blanco cuando se está reproduciendo */
        }


        .bi {
            color: #fff;
        }

        .imglogoRadio {
            width: 100%;
            border-radius: 30px;
        }

        .logoRadio{
            display: flex;
            place-content: center;
        }
    </style>
</head>




<script>
    const audio = document.getElementById("audioPlayer");
    const playButton = document.getElementById("play");
    const pauseButton = document.getElementById("pause");

    playButton.addEventListener("click", function() {
        if (audio.paused) {
            audio.play();
        } else {
            audio.pause();
        }
        updatePlayButtonState();
    });

    pauseButton.addEventListener("click", function() {
        audio.pause();
        updatePlayButtonState();
    });

    audio.addEventListener("ended", function() {
        updatePlayButtonState();
    });

    function updatePlayButtonState() {
        if (audio.paused) {
            playButton.innerHTML = '<i class="bi bi-play-fill"></i>Play';
        } else {
            playButton.innerHTML = '<i class="bi bi-pause-fill"></i>Pause';
        }
    }
</script>



{{-- http://audio.crearchile.info:9380/; https://audio4.tustreaming.cl:10970/stream --}}

<body>
    <div class="ContenedorRadio  col-lg-2 col-3">
        <div class="row d-flex justify-content-center">
            <div class="tituloReproductor col-md-10 col-9">
                <h3 class="textoreproductor ">Sintonia Clave</h3>
            </div>
                <div class="logoRadio col-lg-12 col-md-10 col-9">
                    <img class="imglogoRadio" src="{{ asset('images/logoRadio.jpg') }}" alt="logo"
                        class="img-fluid">
                </div>
                <div class="botonesReproduccion col-md-12">
                    <button class="botonReproduccion col-md-10 col-9" id="play"><i
                            class="bi bi-play-fill"></i></button>
                    <button class="botonReproduccion col-md-10 col-9" id="pause"><i
                            class="bi bi-pause-fill"></i></button>
                </div>
            </div>
        </div>
    </div>

    <audio id="audioPlayer" src="http://audio.crearchile.info:9380/;"></audio>
</body>


</html>
