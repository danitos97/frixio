import Server from "../Server.js";


const btnIngresar = $("#btn-login");
const inputUser = $("#frixio-user");
const inputPass = $("#frixio-pass");
const spanError = $(".error");


btnIngresar.on("click", async function(e){

    spanError.classList.remove("visible");

    const user = inputUser.value;
    const pass = inputPass.value;
    if(user == "" || pass == "")
        return;

    e.preventDefault();
    if(btnIngresar.classList.contains("disabled"))
        return;

    btnIngresar.classList.add("disabled");

    const res = await Server.login(user,pass);

    if(res.status == 401){
        btnIngresar.classList.remove("disabled");
        spanError.classList.add("visible");
        return;
    }
    if(res.status == 503){
        alert(res.data);
        btnIngresar.classList.remove("disabled");
        return;
    }

    location.href = "../";

});


const btnRecovery = $(".recovery-btn");
const recovery    = $(".recovery");
const inputRecovery = $("#input-recovery ");


btnRecovery.on("click", function(){

    if(recovery.classList.contains("visible")) 
        return;

    recovery.classList.add("visible");

    inputRecovery.value = inputUser.value;

});


const btnSendMail = $(".recovery button");

btnSendMail.on("click", async function(e){
    const mail = inputRecovery.value;
    if(mail == "") return;

    e.preventDefault();

    if(btnSendMail.classList.contains("used"))
        return;

    btnSendMail.classList.add("used");

    const res = await Server.recoveryMail(mail);
    console.log(res);

    //Server.recoveryMail(mail);
});

inputRecovery.on("change",function(){
    btnSendMail.classList.remove("used");
});