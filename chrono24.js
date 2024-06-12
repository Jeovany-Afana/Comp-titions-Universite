const time = document.getElementById("time")
let minutes = 0
let seconds = 0
let value_for_progress = 0;
let interval
let duree = 0;
const formulaire = document.getElementById('formulaire');
const duree_passage = document.getElementById("duree_passage");

const read_audio = (audio_name) =>{ //Fonction qui va permettre de lire des fichiers audio
    let audio = new Audio()
    audio.src = audio_name + '.mp3'
    audio.play();
}

formulaire.addEventListener('submit', (event)=>{
    event.preventDefault();
    duree = parseInt(duree_passage.value)
});


const startTimer = () =>{
     if(duree_passage.value === '') {//On vérfie si l'utilisateur a entré une durée de passage
         alert('Veuillez préciser la durée de passage !');
         let value = 0;

         let interval_interne = setInterval(function () { //Interval pour faire clignoter le champs de remplissage de la durée
             value++;
             if (value % 2 === 0) {
                 duree_passage.style.backgroundColor = "green";
             } else {
                 duree_passage.style.backgroundColor = "white";
             }

             if (value === 20) {
                 duree_passage.style.backgroundColor = "white";
                 clearInterval(interval_interne);
             }
         }, 300);
     }
     else{
        interval = setInterval(function (){

        seconds ++;
        value_for_progress ++;
        let new_value = (value_for_progress * 100) / (parseInt(duree_passage.value) * 60);

        updateProgressBar(Math.floor(new_value));//On affecter la valeur actuelle à la barre de navigation pour mettre à jour le pourcentage
        time.innerHTML = `${minutes} : ${seconds}`;
        if(seconds % 60 === 0)
        {
            seconds = 0;
            time.innerHTML = `${minutes} : ${seconds}`;
            minutes+=1;
            read_audio('bip_alerte');//Le bip sonore qui va retentir après chaque minute
        }

        else if(minutes >=parseInt(duree_passage.value))
        {


            if (seconds % 2 ===0)
            {
                time.classList.remove('text-primary');
                time.style.color = "red";
            }
            else
            {
                time.classList.add('text-primary');
            }
            time.innerHTML = `${minutes} : ${seconds}`;

        }

        else if(minutes === parseInt(duree_passage.value) - 1 && seconds >= 39)
        {
            if (seconds % 2 ===0)
            {
                document.body.style.backgroundColor = "red";
            }
            else
            {
                document.body.style.backgroundColor = "#fff";
            }
        }

    },1000);
}
}

const stopTimer = () =>
{
    clearInterval(interval);
    document.body.style.backgroundColor = "#fff";
}

const resetTimer = () =>
{
    clearInterval(interval);
    seconds = 0;
    minutes = 0;
    value_for_progress = 0;
    time.innerHTML = `${minutes} : ${seconds}`;
    updateProgressBar(0);
    document.body.style.backgroundColor = "#fff";
    time.classList.add('text-primary');
}

document.getElementById("start").addEventListener("click",()=>{
    startTimer();
});

document.getElementById("stop").addEventListener('click', function (){
    stopTimer();
});

document.getElementById('reset').addEventListener('click',function (){
    resetTimer();
});
