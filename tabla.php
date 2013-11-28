<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Consulta_Reservación</title>
		<meta charset="UTF-8">
		<meta name="description" content=" El mejor servicio">
		<link rel="stylesheet" type="text/css" href="css/tabla.css">	
	</head>

	<body>
		<header>
			<h1>CONSULTA RESERVACIÓN</p>

		</header>

	<label>FOLIO</label>
	<form name="" method="post" action="tabla.php">
	<input type="text" name="folio">
	<input class="searchbutton" type="submit" value="Ir">
	</form>


<?php
include("php/conexion.php");
ini_set('display_errors', 0);

$folio=$_POST['folio'];

$consulta=$pdo->prepare("SELECT * FROM registro_huesped where id='$folio'");
$consulta->execute();

if ($row=$consulta->rowCount()>0) {

	
?>
<br>
<div class='tablas' >
			<table >
				<tr> 
					<td>
						Folio
					</td>
					<td>
						Tipo Registro
					</td>
					<td >
						Nombre
					</td>
					<td>
						Apellido
					</td>
					<td>
						Adultos
					</td>
					<td>
						Niños
					</td>
					<td>
						Dias
					</td>
					<td>
						Fecha entrada
					</td>
					<td>
						Fecha salida
					</td>
					<td>
						Telefono 
					</td>
					<td>
						Celular
					</td>
					<td>
						Email
					</td>
					<td>
						Ciudad
					</td>


				</tr>

<?php
while ($fila=$consulta->fetch()) {

echo "<tr>";
echo "<td>".$fila['id']."</td>";
echo "<td>".$fila['tipo_registro']."</td>";
echo "<td>".$fila['nombre']."</td>";
echo "<td>".$fila['apellido']."</td>";
echo "<td>".$fila['adultos']."</td>";
echo "<td>".$fila['niños']."</td>";
echo "<td>".$fila['dias']."</td>";
echo "<td>".$fila['fch_entrada']."</td>";
echo "<td>".$fila['fch_salida']."</td>";
echo "<td>".$fila['tel_celular']."</td>";
echo "<td>".$fila['tel_casa']."</td>";
echo "<td>".$fila['email']."</td>";
echo "<td>".$fila['ciudad']."</td>";
echo "</tr>";

}

echo "
</table>
		</div>
		";
}else {
	echo "No Se Encontraron Datos";
}


?>
		
	</body>
	
</html>