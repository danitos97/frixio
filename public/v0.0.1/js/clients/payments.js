import Server from "../Server.js";

const btnProcesar = $("button");

const inputCard = $("#frixio-card");
const inputExp = $("#frixio-exp");
const inputCode = $("#frixio-code");

const output = $("#output");

btnProcesar.on("click",async function(e){
    e.preventDefault();
    const data = {
        card: inputCard.value,
        exp:  inputExp.value,
        code: inputCode.value
    };
    const res = await Server.pay(data);
    console.log(res);
    if(res.status == 200)
        output.innerHTML = res.data.replaceAll("\r\n","<br>");
});



