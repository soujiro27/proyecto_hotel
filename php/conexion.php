<?php
try {
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );
    $pdo = new PDO('mysql:host=localhost;dbname=hoteles;', 'root','', $options);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch( PDOException $e ) {
    echo "Error de conexion:".$e->getMessage();
}
return $pdo;

/*
<?php
try {
	$options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );
	$pdo = new PDO("mysql:dbname=online;host=localhost","root","",$options);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Error al conectar a la base de datos. ".$e->getMessage();	
}

$consulta = $pdo->prepare("SELECT * FROM empleados");
$consulta->execute();
 
while($row = $consulta->fetch()){
	echo $row['nombre'];
}
*/

?>