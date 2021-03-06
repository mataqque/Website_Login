<!DOCTYPE html>
<?php

?>
<html lang="es">
<head>
  <title>RS networks</title>
  <link href="style.css" rel="stylesheet">
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
<body id="body">
<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <img src="src/imagenes/maps.png" height="30px;">
    <a class="navbar-brand d-none d-md-block" href="#"> RS Networks</a>
    <ul class="navbar-nav ml-auto">
        <form class="form-container d-flex ">
            <input type="button" id="iniciar" class="btn btn-success mr-3 " style="font-family:inherit; font-size:20px;" value="Iniciar Sesion">
            <input type="button" class="btn btn-success" style="font-family:inherit; font-size:20px;" value="Registrarse">
        </form>
    </ul>
</nav>
<section class="container-fluid">
    <section class="row justify-content-center">
        <section class="col-sm-12 col-md-4 col-lg-3">
            <form class="form-container" id="formulario" method="POST" action="connection/validar.php">
                <span style="color: white;cursor:pointer;font-family:inherit;font-size: 20px;justify-content: end;" id="cerrar">X</span>
                <h2 style="color: white;text-align: center">Login</h2>
                <div class="form-group">
                    <label for="ExampleInpuEmail" style="color: white;">Correo Electrónico</label>
                    <input  required type="email" name="usuario" class="form-control" id="ExampleInputEmail" aria-describedby="emailHelp" placeholder="Ingresa tu correo">
                    <small id="emailHelp" class="form-text" style="color: rgba(212, 212, 212, 0.815)">Nunca compartiremos tu correo electrónico</small>
                </div>
                <div class="form-group">
                    <label for="ExampleInputPassword" style="color: white;">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="ExampleInputPassword" placeholder="ingresa tu contraseña">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" style="color: white;">Desea recordar sus datos</label>
                </div>
                    <button type="submit" class="btn btn-success" id="ingresar">Ingresar</button>
            </form>
        </section>
    </section>
</section>
<script src="scripts/formulario.js"></script>
<!--ajax coneccion con servidor no metodo fecth-->
<script src="ajax.js"></script>
</body>
</html>
