<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloregistro.css">
    <title>Registrarse</title>
</head>
<body>
    
    <div class='form-overlay'></div>
    <div class='icon fa fa-pencil' id='form-container'>
        <span class='icon fa fa-close' id='form-close'></span>
        <div id='form-content'>
            <div id='form-head'>
                <h1 class='pre'>Registrarse</h1>
            </div>
 <br>
           <form action="login/registrarse.php" method="POST">
            <br>
           <?php if (isset($_GET['error'])) { ?>
                <br>
                <p class="error"><?php echo $_GET['error']  ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']  ?></p>
            <?php } ?>
                <input type="text" placeholder="Ingresa nombre usuario" name="Usuario">
                <input type="text" placeholder="Ingresa nombre completo" name="Nombrecompleto">
                <input type="password" placeholder="Ingresa contraseña" name="Clave">
                <input type="password" placeholder="Repite la contraseña" name="Rclave">
                <button type="submit">Registrar</button>
            </form>
            <a href="login.php" class="btnir">Salir</a>
        </div>
    </div>
</body>
</html>
