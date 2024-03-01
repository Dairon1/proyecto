<?php

session_start();

include_once('../config/conexion.php');
if (isset($_POST['Usuario']) && isset($_POST['Nombrecompleto']) && isset($_POST['Clave'])&& isset($_POST['Rclave'])) {



    function validar($data){
    
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    $usuario = validar($_POST['Usuario']);
    $nombrecompleto = validar($_POST['Nombrecompleto']);
    $clave = validar($_POST['Clave']);
    $rclave = validar($_POST['Rclave']);

    $datosUsuario = 'Usuario=' . $usuario . '&Clave' . $clave;

    if (empty($usuario)) {
        header("location: ../Registrarse.php?error=El usuario es requerido&$datosUsuario");
        exit();
    } elseif (empty($nombrecompleto)) {
        header("location: ../Registrarse.php?error=El nombre es requerida&$datosUsuario");
        exit();
    } elseif (empty($clave)) {
        header("location: ../Registrarse.php?error= La contraseña es requerida&$datosUsuario");
        exit();
    } elseif (empty($rclave)) {
        header("location: ../Registrarse.php?error=Repetir la contraseña es requerida&$datosUsuario");
        exit();
    } elseif ($clave !== $rclave) {
        header("location: ../Registrarse.php?error=La contraseña no coincide&$datosUsuario");
        exit();
    } else {
        $clave = md5($clave);
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $query = $conexion->query($sql);

        if (mysqli_num_rows($query) > 0) {
            header("location: ../Registrarse.php?error=El usuario ya existe");
            exit();
        } else {
            $sql2 = "INSERT INTO usuarios (usuario, nombrecompleto,	clave) VALUES ('$usuario ','$nombrecompleto ','$clave ') ";
            $query2 = $conexion->query($sql2);

            if ($query2) {
                header("location: ../Registrarse.php?success=Usuario creado con éxito&$datosUsuario");
                exit();
            } else {
                header('location: ../Registrarse.php?error="Ocurrió un error"');
                exit();
            }
        }
    }
} else {
    header('location: ../Registrarse.php');
    exit();
}
?>