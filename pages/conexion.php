<?php

$server = "localhost";
$user   = "root";
$pass   = "root";
$db     = "wonder";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion-> connect_errno) {
    die("Conexion fallida" . $conexion->connect_errno);
}else{
    echo "conectado";
}
