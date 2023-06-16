const btnMenu  = document.querySelector(".menu-icon");
const navMovil = document.querySelector("nav.movil");

btnMenu.addEventListener("click" , function(e){
    navMovil.classList.toggle("active");
    e.stopPropagation();
    window.addEventListener("click",closeMenu);

});

function closeMenu(e){
    console.log("listening");
    if(e.target.classList.contains("movil")) return;
    navMovil.classList.toggle("active");
    window.removeEventListener("click",closeMenu);
}