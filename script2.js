// Fonction pour démarrer le compte à rebours avec un nombre de minutes spécifié
function startCountdown(minutes) {
    // Temps de fin du compte à rebours
    const endDate = new Date();
    endDate.setMinutes(endDate.getMinutes() + minutes);

    // Interval de mise à jour du compte à rebours (toutes les secondes)
    const countdownInterval = setInterval(() => {
        // Temps actuel
        const now = new Date().getTime();
        // Calcul de la différence entre la date de fin et le temps actuel
        const distance = endDate - now;

        // Calcul des minutes restantes
        const minutesRemaining = Math.floor(distance / (1000 * 60));
        // Calcul des secondes restantes
        const secondsRemaining = Math.floor((distance % (1000 * 60)) / 1000);

        // Mise à jour de l'affichage des minutes
        document.getElementById("minutes").innerHTML = minutesRemaining.toString().padStart(2, '0');
        // Mise à jour de l'affichage des secondes
        document.getElementById("seconds").innerHTML = secondsRemaining.toString().padStart(2, '0');

        // Mise à jour de la bordure des cercles des minutes et des secondes
        updateCircle('minutes-progress', minutesRemaining, minutes);
        updateCircle('seconds-progress', secondsRemaining, 60);

        // Arrêt du compte à rebours une fois le temps écoulé
        if (distance < 0) {
            clearInterval(countdownInterval);
            document.getElementById("countdown").innerHTML = "EXPIRED";
        }
    }, 1000);
}

// Fonction pour mettre à jour la bordure du cercle en fonction du temps restant
function updateCircle(id, value, max) {
    const circle = document.getElementById(id);
    const circumference = 2 * Math.PI * 45; // Circonférence du cercle avec un rayon de 45
    // Calcul du décalage de la bordure en fonction du temps restant
    const offset = circumference - (value / max) * circumference;
    // Mise à jour de la propriété CSS stroke-dashoffset pour afficher la bordure
    circle.style.strokeDashoffset = offset;
}
