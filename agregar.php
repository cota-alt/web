<?php include("conexion.php"); ?>
<!DOCTYPE html><html><head><link rel="stylesheet" href="estilos.css"><title>Registrar</title></head>
<body><nav><a href="index.php">Inicio</a></nav>
<div class="container"><h2>Registrar visitante</h2>
<form action="" method="POST">
<input type="text" name="nombre" placeholder="Nombre" required><br><br>
<input type="email" name="correo" placeholder="Correo" required><br><br>
<textarea name="mensaje" placeholder="Mensaje navideño"></textarea><br><br>
<button type="submit" name="guardar">Guardar</button></form>
<?php if(isset($_POST['guardar'])){$nombre=$_POST['nombre'];$correo=$_POST['correo'];$mensaje=$_POST['mensaje'];
$conexion->query("INSERT INTO visitantes(nombre,correo,mensaje) VALUES('$nombre','$correo','$mensaje')");
echo "<p>Registrado correctamente 🎄</p>";} ?>
</div></body></html>