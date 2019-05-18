
document.getElementById("ingresar").addEventListener("click",()=>{
    http = new XMLHttpRequest();
    http.open("GET","connection/validar.php",true);
    http.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    http.onreadystatechange = function(){
        const correo = document.getElementById("emailHelp");;
        correo.innerHTML = http.responseText;
        correo.style.color="red";
        }
    http.send();
});

