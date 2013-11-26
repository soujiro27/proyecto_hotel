<?php
include("mysql.class.php");
$db= new MySQL();
$db->open();


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$adultos=$_POST['adultos'];
$niños=$_POST['niños'];
$dias=$_POST['dias'];
$fecha_entrada=$_POST['fecha_entrada'];
$hora_entrada=$_POST['hora_entrada'];
$fecha_salida=$_POST['fecha_salida'];
$hora_salida=$_POST['hora_salida'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$cel=$_POST['cel'];
$voucher=$_POST['voucher'];
$tipo_tarjeta=$_POST['tipo_tarjeta'];
$fecha_vencimiento=$_POST['fecha_vencimiento'];
$seguridad=$_POST['seguridad'];
$habitacion=$_POST['habitacion'];
$id=$_POST['id'];
$tipo_habitacion=$_POST['tipo_habitacion'];
$costo_dia=$_POST['costo_dia'];
$tipo_pago=$_POST['tipo_pago'];

echo $_POST['tipo_pago'];

$consulta=$db->consulta
("INSERT INTO registro_huesped (nombre,apellido,adultos,niños,dias,fch_entrada,fch_salida,hr_entrada,hr_salida,tel_celular,tel_casa,email,ciudad,boucher) 
	VALUES ('$nombre','$apellido','$adultos','$niños','$dias','$fecha_entrada','$fecha_salida','$hora_entrada','$hora_salida','$cel','$tel','$email','','$voucher')");


if ($tipo_pago==1) {
$consulta=$db->consulta
("INSERT INTO tarjetacredito (tipoTarjeta,fechaVencimiento,seguridad) 
	VALUES ('$tipo_tarjeta','$fecha_vencimiento','$seguridad')");
}

$consulta=$db->consulta
("INSERT INTO hospedaje (no_habitacion,id_huesped,id_tipohabitacion,id_tipopago,anticipo,restante,costo) 
	VALUES ('$habitacion','$id','$tipo_habitacion','$tipo_pago','','','$costo_dia')");
?>