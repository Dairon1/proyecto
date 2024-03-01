<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>lOGIN</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/estylo.css'>



</head>

<body>

  <div class="container">
    <div class="info">
      <strong>
        <h1>INICIAR SESION</h1><strong>
    </div>
  </div>
  <div class="form">
    <form action="procesar_login.php" method="post">
      <hr>
      <?php 
      if (isset($_GET['error'])) {
        ?>
        <p class="error">
        <?php 
        echo $_GET['error']
        ?>
        </p>
        <?php
      }
      ?>
      <hr>
      <div class="thumbnail"><img src="imagenes/avatar-male2.png" /></div>
      <input type="text" placeholder="nombre" name="nombreusuario"  />
      <input type="password" placeholder="contraseña" name="Claveusuario" />
      <button name="botonlogin" class="btn" type="submit">iniciar sesion</button>
    </form>
    <p class="message">¿No te has registrado? <a href="Registrarse.php">Entra aquí</a></p>
  </div>

</body>

</html>