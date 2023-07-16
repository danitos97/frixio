import Server from "../Server.js";

const inputPass    = $("#new-pass");
const inputConfirm = $("#confirm-pass");
const btnSave      = $("button");

const reqLength    = $(".req .length");
const reqMinus     = $(".req .minus");
const reqMayus     = $(".req .mayus");
const reqNumber    = $(".req .number");
const reqConfirm   = $(".req .confirm");

inputPass.focus();

let newPass;
let confirmPass;

inputPass.on("keyup",function(){
    newPass = inputPass.value;
    setClass(reqLength, newPass.length >= 8);
    setClass(reqMayus, /[A-ZÑ]/.test(newPass));
    setClass(reqMinus, /[a-zñ]/.test(newPass));
    setClass(reqNumber, /\d/.test(newPass));
    setClass(reqConfirm, newPass == confirmPass && newPass != "");
    checkAll();
});

inputConfirm.on('keyup',function(){
    confirmPass = this.value;
    setClass(reqConfirm, newPass == confirmPass && newPass != "");
    checkAll();
});

function setClass(req,isGood){
    isGood?
        req.classList.add("good") :
        req.classList.remove("good");
}

function checkAll(){
    $(".req .good")?.length >= 5?
        btnSave.classList.remove("disabled") :
        btnSave.classList.add("disabled");
}

btnSave.on("click", async function(e){
    e.preventDefault();
    if(btnSave.classList.contains("disabled"))
        return;

    btnSave.classList.add("loading", "disabled");
    const res = await Server.changePass(newPass);
    if(res.status != 200)
        return;
    btnSave.classList.remove("loading");
    btnSave.classList.add("success");
    await sleep(800);
    location.href = "../";

});

