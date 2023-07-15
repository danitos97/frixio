import Server from "../Server.js";

const inputEmail  = $("#email");
const btnEnviar   = $("button");
const spanSuccess = $("#success");

btnEnviar.on("click",async function(e){

    if(btnEnviar.classList.contains("disabled")) {
        e.preventDefault();
        return;
    }

    const email = inputEmail.value;
    if(email == "") return;

    e.preventDefault();

    btnEnviar.classList.add("disabled");

    const res = await Server.sendMail(email);
    
    if(res.status == 200)
        spanSuccess.style.display = "inline";

    console.log(res);
    inputEmail.value = "";
    btnEnviar.classList.remove("disabled");

});