const grandTitre=document.getElementById("grandTitre");
const boutons=document.querySelectorAll(".btn");
 const bouton1=document.querySelector(".btn1");
const bouton2 = document.querySelector(".btn2");
const messageChoix = document.querySelector(".choix");
let compteurGrandTitre=0;
let randomNumCustomRange="";
  setInterval(()=>{

       compteurGrandTitre+=1;
     if(compteurGrandTitre%3===0==true)
       {
         randomNumCustomRange = Math.random() * (50 - 360) + 50; 
           grandTitre.style.background="linear-gradient("+randomNumCustomRange+"deg,blue,yellow)";
             grandTitre.style.borderColor="yellow";
       }

       else{
          grandTitre.style.borderColor="blue";
       }
  },3000);


  boutons.forEach((btn)=>{
    btn.addEventListener("mouseover",()=>{
        btn.style.transform="scale(1.3)";
    });

    btn.addEventListener("mouseout",()=>{
        btn.style.transform="scale(1)";
    })
  });
document.body.addEventListener("load",function () { grandTitre.style.opacity = "1"; messageChoix.style.opacity = "1"; });
bouton1.addEventListener("mousedown", () => { bouton1.style.transform = "scale(3)"; grandTitre.style.opacity = "0"; messageChoix.style.opacity = "0"; setTimeout(() => { location.href = "indexqpus.php"; }, 3000); });
bouton2.addEventListener("mousedown", () => { bouton2.style.transform = "scale(3)"; grandTitre.style.opacity = "0"; messageChoix.style.opacity = "0"; setTimeout(() => { location.href = "indexdebattons.php"; }, 3000); });