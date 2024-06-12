//Définir la variable qui contiendera la fonction setInterval()
let interval = null;

//Définir une variable qui contient l'état de getInputValue
let status = false;

let audio = document.getElementById("audio");

let ok = null;
//Fonction muniteur ou compte à rebours (logique pour déterminer quand décrémenter la valeurs suivante, etc)
function getInputValue(){

    let choice = document.getElementById("choice").value;

    if (isNaN(choice)) {
        alert ('Entrez un nombre !!!');
    }else {
        let startingMinutes = choice;
        let time = startingMinutes * 1;

        ok = function updateCountdown() {
            const minutes = Math.floor(time / 60);
            let seconds = time % 60;

            seconds = seconds < 10 ? '0' + seconds : seconds;
            
            document.getElementById("countdown").innerHTML = ` : ${seconds}`;
            if (time > 0) {
                time--;
                document.getElementById("hidden").value = time;

            }else {
                document.getElementById("countdown").innerHTML = `: 00`;
                window.clearInterval(interval);
                audio.play();
                choice = document.getElementById("choice").value;
            }
        }

        interval = window.setInterval(ok, 1000);
        status = true;

        
    }

}
function startStop() {
            
    if (status === false){

        interval = window.setnterval(ok, 1000);
        document.getElementById("startStop").innerHTML = ">";
        choice = document.getElementById("hidden").value + 1;
        status = true;
    }else {

        window.clearInterval(interval);
        document.getElementById("startStop").innerHTML = "||";
        audio.pause();
        audio.currentTime = 0;
        status = false;
    }
}