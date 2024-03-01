<?php 

$host="localhost";
$user="root";
$pass="";
$bd="registro";

$conexion = new mysqli($host, $user, $pass, $bd);
if (!$conexion) {
    echo "conexion fallida";
}
