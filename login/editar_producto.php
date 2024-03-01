<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo producto </title>
   <link rel="stylesheet" href="css/estiloregistro.css">
</head>
<body>
    <h1>EDITAR PRODUCTO</h1>
    <div class="form-container">
    <form action="login/registro_producto.php" method="POST">
				
                <label>Nombre producto</label>
                <input type="text" name="nombre_producto" placeholder="nombre producto">
        <br>
            <label>Cantidad</label>
                <input type="number" name="cantidad" placeholder="cantidad">
                <br>
            
            <label>descripcion</label>
            <input type="text" name="descripcion" placeholder="descripcion">
            <br>
        
            <label>Valor Undidad $</label>
                <input type="text" name="valorventaUnd" placeholder="valor UND $">
                <br>

                <button type="submit" name="btnguardar" value="ok">Guardar</button>
                <br>
    
        </form>
    </div>
</body>
</html>