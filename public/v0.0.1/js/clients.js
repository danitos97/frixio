const btnProcesar = $("button");
const output = $("#output");

btnProcesar.on("click",async function(){
    const call = await fetch("../server/payworks.php");
    const res = await call.json();
    console.log(res);
    output.innerHTML = res.data;
});

