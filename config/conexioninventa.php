<?php 
$host="localhost";
$user="root";
$pass="";
$bd="base_de_datos_inventa";

$conexion = new mysqli($host, $user, $pass, $bd);
if (!$conexion) {
    echo "conexion fallida";
}
