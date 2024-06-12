let test=0;
// Sélectionnez l'élément de la barre de progression
var progressBar = document.getElementById('myProgressBar');

// Mettez à jour la valeur de la barre de progression
function updateProgressBar(value) {
    // Assurez-vous que la valeur est entre 0 et 100
    let newValue = Math.min(Math.max(value, 0), 100);

    // Mettez à jour l'attribut aria-valuenow de la barre de progression
    progressBar.style.width = newValue + '%';
    progressBar.setAttribute('aria-valuenow', newValue);

    progressBar.textContent = newValue + '%';
}
// Mettre à jour la barre de progression avec une nouvelle valeur


