<?php include("conexion.php"); ?>
<!DOCTYPE html><html><head><link rel="stylesheet" href="estilos.css"><title>Navidad</title></head>
<body><nav><a href="index.php">Inicio</a><a href="agregar.php">Registrar visitante</a></nav>
<div class="container"><h2>Registro de Visitantes – Navidad</h2><table><tr><th>Nombre</th><th>Correo</th><th>Mensaje</th><th>Acción</th></tr>
<?php $consulta=$conexion->query("SELECT * FROM visitantes ORDER BY fecha DESC");
while($row=$consulta->fetch_assoc()){echo "<tr><td>{$row['nombre']}</td><td>{$row['correo']}</td><td>{$row['mensaje']}</td>
<td><a href='eliminar.php?id={$row['id']}'>Eliminar</a></td></tr>";} ?>
</table></div></body></html>