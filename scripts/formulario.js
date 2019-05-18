document.getElementById("iniciar").addEventListener("click",()=>{
    div = document.getElementById("formulario");
    body = document.getElementById("body");
    div.style.display="block";
});
var modal = document.getElementById('formulario');
/*    document.body.addEventListener("click",(event)=>{
    const x = ["BODY",0]
        if(event.target.nodeName==x[con]){
        modal.style.display="none";
        con=1;
    }
});
*/
document.getElementById("cerrar").addEventListener("click",()=>{
    modal.style.display="none"
})