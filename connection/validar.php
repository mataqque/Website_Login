<?php
include "conneccion.php";
$email = $_POST["usuario"];    
$password = $_POST["password"]; 

if(!empty($email) && !empty($password)){
$query = $pdo->query("SELECT * FROM network WHERE password ='".$password."' AND email ='".$email."'");
$encontrado = false;
    foreach ($query as $usuario) {
            $_SESSION["id"] = $usuario["id"];
            $_SESSION["email"] = $usuario["email"];
            $_SESSION["password"] = $usuario["password"];
            session_start();
            $encontrado = true;
    }
    if($encontrado){
        header('Location: ../welcome.php');
    }else{
        header('Location: ../index.html');
    }

    }else{
        header('Location: ../index.html');

}
?>