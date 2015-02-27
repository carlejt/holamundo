<!DOCTYPE html>
<html>
<body>

<?php
Include_once("conection.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];


$conexion = ConnectToDB();
   $peticion= "Update Agenda Set nombre ='" . $nombre . "', telefono= '" . $telefono .  "' Where id= " . $id . ";";	
   mysql_query($peticion, $conexion);
mysql_close($conexion);	

header('Location: crud.php');

?>

</body>
</html>
