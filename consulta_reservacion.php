<?php
include("php/conexion.php");

$folio=$_POST['folio'];

$consulta=$pdo->prepare("SELECT * FROM registro_huesped where id='$folio'");
$consulta->execute();

echo "
<div class='tablas' style='width:1340px;height:150px;'>
			<table >
				<tr> 
					<td>
						Folio
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
						Fechasalida
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
";

while ($fila=$consulta->fetch()) {

echo "<tr>";
echo "<td>".$fila['id']."</td>";
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


?>