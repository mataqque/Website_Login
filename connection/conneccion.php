<?php
//include "validar.php";
$host = "localhost";
$root = "id4359107_stalky";
$database = "id4359107_prueba";
$pass  = "";
try {
    $pdo = new PDO("mysql:dbname=".$database.";host=".$host, $root,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
} catch (Exception $e) {
    echo "Error al conectar con la base de datos".$e->getMessage();
}

?>