<!DOCTYPE html>
<html>
<body>

<?php
Include_once("conection.php");

$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];

$conexion = ConnectToDB();
   $peticion = "Insert into Agenda (nombre, telefono) values ( '" . $nombre . "','" . $telefono . "');";
   mysql_query($peticion, $conexion);
mysql_close($conexion);	


header('Location: crud.php');

?>

</body>
</html>
