<?php
// Define tus variables de conexión (reemplaza con los valores correctos)
$host= "localhost";
$user= "root";
$pass= "";
$bd= "base_de_datos_inventa";

$conexion = new mysqli($host, $user, $pass, $bd);
if (!$conexion) {
    echo "conexion fallida";
}
if (!empty($_POST["btnguardar"])) {
    if (!empty($_POST["nombre_producto"]) && !empty($_POST["cantidad"]) && !empty($_POST["descripcion"]) && !empty($_POST["valorventaUnd"])) {
        $nombre_producto = $_POST["nombre_producto"];
        $cantidad = $_POST["cantidad"];
        $descripcion = $_POST["descripcion"];
        $valorventaund = $_POST["valorventaUnd"];

        // Establece la conexión a la base de datos
        $conn = new mysqli($host, $user, $pass, $bd);
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Consulta SQL para insertar el producto
        $sql = "INSERT INTO productos (nombre_producto, cantidad, descripcion, valorventaund)VALUES ('$nombre_producto', $cantidad, '$descripcion', '$valorventaund')";
        if ($conn->query($sql) === TRUE) {
            echo '<div>Producto registrado correctamente</div>';
        } else {
            echo 'Error al registrar el producto: ' . $conn->error;
        }
        $conn->close();
    } else {
        echo 'Error al registrar el producto: Todos los campos son obligatorios';
    }
}
?>
