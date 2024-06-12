const debattons = document.getElementById("debattons");
const questions = document.getElementById("questions");
const deuxBouton = document.querySelectorAll(".deuxBoutons");


for (let e of deuxBouton) {
    e.addEventListener("mouseover", function () { 
        e.style.opacity = "0.7";
        e.style.border = "5px solid blue";
        e.style.transform = "scale(1.2)";
    });

    e.addEventListener("mouseout", function () {
        e.style.opacity = "1";
        e.style.border = "4px solid blue";
        e.style.transform = "scale(1)";
    });

    e.addEventListener("mousedown", function () {
        e.style.opacity = "1";
        e.style.border = "6px solid blue";
        e.style.transform = "scale(1.3)";
    });
}



  