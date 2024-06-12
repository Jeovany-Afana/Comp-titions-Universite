// JavaScript source code
let bouche = document.getElementById("bouche");



const oeil1 = document.getElementById("oeil1");
const oeil2 = document.getElementById("oeil2");

// Valeurs des limites des yeux
const limitesYeux = {
    gauche: 48.4,
    droite: 54,
    haut: 12,
    bas: 13.5,
    largeurOeil: 5, // Largeur des yeux
};

const limitesYeux2 = {
    gauche: 51.5,
    droite: 57.5,
    haut: 12,
    bas: 13.5,
    largeurOeil: 5, // Largeur des yeux
};

// Initialisation des positions et vitesses des pupilles
let oeil1X = 48.7; // Position initiale horizontale de l'oeil 1
let oeil2X = 51.8; // Position initiale horizontale de l'oeil 2
let oeil1Y = 12.5; // Position initiale verticale de l'oeil 1
let oeil2Y = 12.5; // Position initiale verticale de l'oeil 2
let oeil1XSpeed = 0.1;
let oeil2XSpeed = 0.1;
let oeil1YSpeed = 0.07;
let oeil2YSpeed = 0.07;

function deplacement() {
    // Mise à jour des positions des pupilles
    oeil1.style.left = oeil1X + '%';
    oeil1.style.top = oeil1Y + '%';

    oeil2.style.left = oeil2X + '%';
    oeil2.style.top = oeil2Y + '%';

    // Modification des positions des pupilles
    oeil1X += oeil1XSpeed;
    oeil1Y += oeil1YSpeed;
    oeil2X += oeil2XSpeed;
    oeil2Y += oeil2YSpeed;
}

deplacement();
