//-----------------------------------------------------------------------------Som do pacman
let faixa = [
    document.getElementById('speakCharacterAudio1'), // Eita Pac doidão.
    document.getElementById('speakCharacterAudio2'), // Ah, seu amarelinho doidão.
    document.getElementById('speakCharacterAudio3'), // Amarelinho, vaza do labirinto!
    document.getElementById('speakCharacterAudio4'), // Ah, alguem tem uma pastilha ai?
    document.getElementById('speakCharacterAudio5'), // Ei, bolinha amarela, você me lembra os seus pais. Conheceu meus pais? Sim, eles eram tão ingenuos quanto você
    document.getElementById('speakCharacterAudio6'), // Você está morto Pac!
    document.getElementById('speakCharacterAudio7'), // O que eu acho é que estou bem encrencado
    document.getElementById('speakCharacterAudio8'), // Chega! vamos terminar logo com isso
    document.getElementById('speakCharacterAudio9') // Não, por favor, não coma a gente, não arranque nossos olhos
]

function playAudioAtScore(scoreThreshold, audioIndex) {
    if (SCORE >= scoreThreshold) {
            console.log("Áudio carregado: " + faixa[audioIndex]);
            faixa[audioIndex].play();
    }
}
function pauseAudio(ate) {
    for (let i = 0; i < ate; i++) {
        faixa[i].pause();
    }
}



