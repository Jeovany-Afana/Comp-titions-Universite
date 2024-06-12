let scoreA = Number(document.getElementById("scoreA").value);
let scoreB = Number(document.getElementById("scoreB").value);

function ajoutA10() {

    scoreA += 10;
    document.getElementById("scoreA").value = scoreA;
}
function ajoutA20() {

    scoreA += 20;
    document.getElementById("scoreA").value = scoreA;
}
function ajoutA30() {

    scoreA += 30;
    document.getElementById("scoreA").value = scoreA;
}
function ajoutA40() {

    scoreA += 40;
    document.getElementById("scoreA").value = scoreA;
}
function dimA10() {

    scoreA -= 10;
    document.getElementById("scoreA").value = scoreA;
}

function ajoutB10() {

    scoreB += 10;
    document.getElementById("scoreB").value = scoreB;
}
function ajoutB20() {

    scoreB += 20;
    document.getElementById("scoreB").value = scoreB;
}
function ajoutB30() {

    scoreB += 30;
    document.getElementById("scoreB").value = scoreB;
}
function ajoutB40() {

    scoreB += 40;
    document.getElementById("scoreB").value = scoreB;
}
function dimB10() {

    scoreB -= 10;
    document.getElementById("scoreB").value = scoreB;
}

//Définir la variable qui contiendera la fonction setInterval()
let interval = null;

//Définir une variable qui contient l'état de getInputValue
let status = false;

//Fonction muniteur ou compte à rebours (logique pour déterminer quand décrémenter la valeurs suivante, etc)

//Definir la variable seconds
let seconds = 30;

let displaySeconds = 0;

let audio = document.getElementById("audio");
let avertissement = document.getElementById("avertissement");

function resett() {

    scoreA = 0;
    scoreB = 0;
    document.getElementById("scoreA").value = '0' + scoreA;
    document.getElementById("scoreB").value = '0' + scoreB;
    window.clearInterval(interval);
    seconds = 29;
    document.getElementById("countdown").innerHTML = "30";
    document.getElementById("startStop").innerHTML = ">";
    avertissement.pause();
    avertissement.currentTime = 0;
    audio.pause();
    audio.currentTime = 0;
    status = false;
    

}



function startStop() {

    if (status === false) {
        
        interval = window.setInterval(minuteur, 1000);
        document.getElementById("startStop").innerHTML = "II";
        status = true;
    }else {

        window.clearInterval(interval);
        document.getElementById("startStop").innerHTML = ">";
        avertissement.pause();
        avertissement.currentTime = 0;
        status = false;
    }
}


function minuteur(){

    displaySeconds = seconds < 10 ? '0' + seconds : seconds;

    if (seconds > 0) {
        seconds--;
        if (seconds < 11) {
            avertissement.play();
        }

    }else {
        window.setInterval(interval);
        document.getElementById("countdown").innerHTML = "00";
        avertissement.pause();
        avertissement.currentTime = 0;
        audio.play();
    }

    document.getElementById("countdown").innerHTML = displaySeconds;
}


function reset() {

    window.clearInterval(interval);
    seconds = 29;
    document.getElementById("countdown").innerHTML = "30";
    document.getElementById("startStop").innerHTML = ">";
    avertissement.pause();
    avertissement.currentTime = 0;
    audio.pause();
    audio.currentTime = 0;
    status = false;
}
