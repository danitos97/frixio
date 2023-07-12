import Server from "../Server.js";

const btnIngresar = $("button");
const inputUser = $("#frixio-user");
const inputPass = $("#frixio-pass");

btnIngresar.on("click",async function(e){
    const user = inputUser.value;
    const pass = inputPass.value;
    if(user == "" || pass == "")
        return;
    e.preventDefault();
    const res = await Server.login(user,pass);
    if(res.status == 401){
        console.log("Datos incorrectos");
        return;
    }
    location.href = "../";
});