// Sélectionner l'élément HTML où afficher le chronomètre
const timerDisplay = document.getElementById('timer');
const cleinOeil1 = document.getElementById("cleinOeil1");
const cleinOeil2 = document.getElementById("cleinOeil2");
const toummy = document.querySelector("img");
const body = document.querySelector("body");
bouche=document.getElementById("bouche");
// Initialiser les variables pour les minutes et les secondes
let minutes = 0;
let seconds = 0;
let compteurVue = 0;

// Créer une fonction pour mettre à jour le chronomètre
function updateTimer() {
    // Incrémenter les secondes
    seconds++;

/*
    if (seconds % 2 === 0) {
        body.style.opacity = "0.5";
        body.style.backgroundColor = "red";
        toummy.style.borderColor = "red";
    }

    else {
        toummy.style.borderColor = "blueviolet";
        body.style.opacity = "1";
        body.style.backgroundColor = "white";
    }*/


    if (seconds % 10 === 0) {

        cleinOeil1.style.opacity = "1";
        cleinOeil1.style.height = "2.1%";

        cleinOeil2.style.opacity = "1";
        cleinOeil2.style.height = "2.1%";

    }

    else {
        cleinOeil1.style.height = "0%";
        cleinOeil1.style.opacity = "0";


        cleinOeil2.style.height = "0%";
        cleinOeil2.style.opacity = "0";

    }

    if (seconds % 5 === 0) {
        bouche.style.height = "1.3%";
        bouche.style.borderStartStartRadius = "40%";
        bouche.style.borderStartEndRadius = "40%";


        compteurVue += 1;

        if (compteurVue === 1) {
            oeil1.style.top = "24.1%"; //PREMIER DEPLACEMENT DES YEUX
            oeil2.style.top = "24.1%";
        }

        else if (compteurVue === 2) {

            oeil1.style.top = "23.5%"; //DEUXIEME DEPLACEMENT DES YEUX
            oeil2.style.top = "23.5%";

            oeil1.style.left = "49.2%"; //DEUXIEME DEPLACEMENT DES YEUX
            oeil2.style.left = "52.3%";
        }

        else if (compteurVue === 3) {

            oeil1.style.top = "23.5%"; //DEUXIEME DEPLACEMENT DES YEUX
            oeil2.style.top = "23.5%";

            oeil1.style.left = "48.5%"; //DEUXIEME DEPLACEMENT DES YEUX
            oeil2.style.left = "51.6%";
        }

        else if (compteurVue === 4) {

            oeil1.style.top = "23.5%"; //DEUXIEME DEPLACEMENT DES YEUX
            oeil2.style.top = "23.5%";

            oeil1.style.left = "48.7%"; //DEUXIEME DEPLACEMENT DES YEUX
            oeil2.style.left = "51.8%";
            compteurVue = 0;
        }

         
    }

    else {
        bouche.style.height = "0.5%";
        bouche.style.borderStartStartRadius = "40%";
        bouche.style.borderStartEndRadius = "40%";
    }
    // Si les secondes atteignent 60, augmenter les minutes et remettre les secondes à 0
    if (seconds === 60) {
        seconds = 0;
        minutes++;
    }

    // Afficher le temps dans le format mm:ss
    timerDisplay.textContent = `${minutes < 10 ? '0' : ''}${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
}

// Définir l'intervalle de rafraîchissement du chronomètre (1 seconde)
let interval = setInterval(updateTimer, 1000);


