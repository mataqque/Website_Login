<html style="overflow:hidden;">
<?php

?>

<head>
        <title>RS networks</title>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="src/imagenes/maps.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- bootstrap-->
          <link rel="stylesheet" href="src/archivos/bootstrap-4.3.1-dist/css/bootstrap.css">
          <!--bootstrap-->
          <script src="src/archivos/bootstrap-4.3.1-dist/js/bootstrap.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      </head>
      <body class="body-background ng-scope">
          <nav class="navbar navbar-inverse navbar-custom bg-dark">
              <div class="container-fluid">
              <div class="navbar-header">
                      <img src="src/imagenes/maps.png" height="30px"><span style="color:white">RS Network</span>
              </div>
          </div>
      </nav>
      <div class="container-fluid">
              <div class="row">
                <div class="col-sm-1 d-none d-md-block" style="background:rgba(0,0,0,0.3);height:93vh; overflow:hidden;">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <img src="src/imagenes/carrito1.png" style="height: 30px;">
                        </li>
                    </ul>
                </div>
                <div class="col-sm-9  justify-content-center align-items-center flex-row d-flex">
                    <h1 class="pr-5"> Bienvenido a mi página :) Beta 1.0</h1>
                    <button class="btn btn-success" id="programa"> callate perrita askerosa</button></div>
                <div class="col-sm-2">flavio1</div>
              </div>
          </div>
        <script>
            function decir(texto){
        speechSynthesis.speak(new SpeechSynthesisUtterance(texto));
    }
var con=0;
document.getElementById("programa").addEventListener("click",()=>{
    var  x=["dejame programar perra de mierda","quieres que te cache no perra de mierda","tu quieres que te viole no perra"];
    decir(x[con]);
    con++
})
        </script>
      </body>
</html>