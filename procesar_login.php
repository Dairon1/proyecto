<?php
$host="localhost";
$user="root";
$pass="";
$bd="registro";
session_start();


$conexion = new mysqli($host, $user, $pass, $bd);
if (!$conexion) {
    echo "conexion fallida";
}

// Verificar conexión
if ($conexion->connect_error) {
  die("Connection failed: " . $conexion->connect_error);
}

// Recibir datos del formulario
$user = $_POST['nombreusuario'];
$pass = $_POST['Claveusuario'];

// Consulta SQL
$sql = "SELECT * FROM usuarios WHERE usuario='$user' AND clave='$pass'";
$result = $conexion->query($sql);

if ($result->num_rows > 0) {
  // Redirigir al usuario a index.php
  header('Location: menu.php');
} else {
  echo "Error en la autenticación";
 
}
 exit();
$conexion->close();
?>