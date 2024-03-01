<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>inventario </title>
	<link rel="stylesheet" href="css/estyloinventario.css">

</head>

<body>
	<div class="form-container">
		<h1>INVENTARIO </h1>
		<br><br>
		<h3>REGISTRAR PRODUCTO</h3>
		<?php 
		include "login/registro_producto.php";
		include "config/conexioninventa.php";
		 ?>
		 <div class="form">
			<form action="login/registro_producto.php" method="POST">
				
                    <label>Nombre producto</label>
					<input type="text" name="nombre_producto" placeholder="nombre producto">
			<br>
				<label>Cantidad</label>
					<input type="number" name="cantidad" placeholder="cantidad">
					<br>
				
					<label for="bio">Descripcion</label>
          			<input type="text" name="descripcion" placeholder="descripcion">
				<br>
			
				<label>Valor Undidad $</label>
					<input type="number" name="valorventaUnd" placeholder="valor UND $">
					<br>

                    <button type="submit" name="btnguardar" value="ok">Guardar</button>
                    <br>
	               
			</form>
	
		</div>
	</div>
	<button onclick="location.href='menu.php'" class="btnsalir">salir</button>
		<br>
<div class="main-wrapper">
		<table id="racetimes">

			<head>
				<tr id="firstrow">
					<th>Id</th>
					<th>Nombre producto</th>
					<th>Cantidad</th>
					<th>Descripcion</th>
					<th>Valor unidad</th>
				</tr>
			</head>
			<tbody>
				<?php include "config/conexioninventa.php";
				$Sql = "SELECT * FROM productos";

				$resultado = $conexion->query($Sql);

				while ($fila = $resultado->fetch_assoc()) { ?>
					


					<tr>
						<th scope="row"><?php echo $fila["id"]?></th>
						<td><?php echo $fila["nombre_producto"]?></td>
						<td><?php echo $fila["cantidad"]?></td>
						<td><?php echo $fila["descripcion"]?></td>
						<td><?php echo $fila["valorventaund"]?></td>
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