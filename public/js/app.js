document.addEventListener('DOMContentLoaded', function () {
    const audioPlayer = document.getElementById('audioPlayer');
    audioPlayer.volume = 0.5;
    // Detener la reproducción automática
    audioPlayer.autoplay = false;
    
    
    // Evento para reproducir cuando se hace clic
    audioPlayer.addEventListener('play', function () {
        if (!audioPlayer.paused && audioPlayer.currentTime === 0) {
            audioPlayer.play();
        }
    });
    
});

