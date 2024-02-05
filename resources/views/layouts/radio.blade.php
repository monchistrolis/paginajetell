<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ministerio Evangelistico Jetell</title>
    <link rel="stylesheet" href="{{ asset('css/App.css') }}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
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
            display: flex;
            justify-content: center;
            align-items: center;
            width: 90%;
            margin-left: 10px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="ContenedorRadio col-lg-2 col-md-3 col-sm-3 col-5   ">
        <div class="tituloReproductor">
            <h3>Sintonia Clave</h3>
        </div>
        <div class="cuerpoReproductor">
            <div class="logoRadio">
                <img class="imglogoRadio" src="{{ asset('images/logoRadio.jpg') }}" alt="logo" class="img-fluid">
            </div>
            <div class="botonesReproduccion">
                <button class="botonReproduccion" id="play"><i class="bi bi-play-fill"></i>Play</button>
                <button class="botonReproduccion" id="pause"><i class="bi bi-pause-fill"></i>Pause</button>
            </div>
        </div>
    </div>

    <audio id="audioPlayer" src="http://audio.crearchile.info:9380/; "></audio>
    
{{-- http://audio.crearchile.info:9380/; https://audio4.tustreaming.cl:10970/stream--}}

    <script>
        const audio = document.getElementById("audioPlayer");
        const playButton = document.getElementById("play");
        const pauseButton = document.getElementById("pause");

        playButton.addEventListener("click", function() {
            if (audio.paused) {
                audio.play();
                playButton.classList.add("playing"); // Agregar una clase "playing" al botón
            } else {
                audio.pause();
                playButton.classList.remove("playing"); // Eliminar la clase "playing" del botón
            }
        });

        audio.addEventListener("ended", function() {
            playButton.classList.remove("playing"); // Cuando el audio termina, eliminar la clase "playing"
        });

        pauseButton.addEventListener("click", function() {
            audio.pause();
            playButton.classList.remove(
                "playing"); // Si se pausa desde el botón "Pause", eliminar la clase "playing"
        });
    </script>

</body>

</html>
