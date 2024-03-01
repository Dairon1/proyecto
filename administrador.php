<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estylo.css">
    <title>Administrador</title>
</head>
<body>
    <header>
        <nav>
           <ul>
       
        <li><a href="administrador.html">administrador</a></li>
        <li><a href="inventario.html">inventario</a></li>
        <li><a href="RegistrarRol.html">registrar rol</a></li>
        <li><a href="ventas.html">ventas</a></li>
        <li><a href="consultarinventario.html">consultar inventario</a></li>
           </ul>
         </nav>
       </header>
       <html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/estyloinventario.css">
    <title>ADMINISTRADOR</title>
</head>
<body>
    

	<div id="content">
    <img src="imagenes/LOGOempresa.png" alt="Logo de la empresa" class="logo_empresa">

</div>
    
    

 




	<div class="form-container">
		
		<br><br>
		<?php 
		
		include "config/conexion.php";
		 ?>
		  <main>
        <div class="container py-4 text-center">
            <h2>CONSULTAR EMPLEADO</h2>

               

<div class="col-auto">
    <label for="campo">Buscar: </label>
	<input type="text" name="caja-busqueda"></input>



</div>
	</div>
		<br>
<div class="main-wrapper">
		<table id="racetimes">

			<head>
				<tr id="firstrow">
					<th>Id</th>
					<th>Nombre completo</th>
					<th>Nombre usuario</th>
				</tr>
			</head>
			<tbody>
				<?php include "config/conexion.php";
				$Sql = "SELECT * FROM usuarios";

				$resultado = $conexion->query($Sql);

				while ($fila = $resultado->fetch_assoc()) { ?>
					


					<tr>
						<th scope="row"><?php echo $fila["id"]?></th>
						<td><?php echo $fila["nombrecompleto"]?></td>

						<td><?php echo $fila["usuario"]?></td>
						
						<td>
							
							<div class="button-editar"><a href="login/editar_producto.php">  Editar</a>
							</div>
						
							<div class="button-24"><a href="">Eliminar</a>
						</div>
						</td>
					</tr>

				
					
			</tbody>
		<?php } ?>
		</table>
</div>
</body>

</html>
</body>
</html>
</body>
</html>