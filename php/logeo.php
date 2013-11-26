<?php 
include("mysql.class.php");
$usuario=$_POST['usuario'];
$contra=$_POST['contra'];
$db = new MySQL();
$db->open();
$queryx = "SELECT * FROM usuarios where usuario='$usuario' and contra='$contra';";
$consulta = $db->consulta($queryx);

if ($row = $db->fetch_array($consulta))
{
	header('Location: ../habitaciones.html');
   
}
else
{
    header('Location: ../index.html');
}

echo("entra");
$db->close();
?>