const btnProcesar = $("button");

btnProcesar.on("click",async function(){
    const call = await fetch("../server/payworks.php");
    const res = await call.json();
    console.log(res);
});

