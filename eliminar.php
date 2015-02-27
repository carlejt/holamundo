<!DOCTYPE html>
<html>
<body>

<?php
Include_once("conection.php");

$id = $_GET["id"];

$conexion = ConnectToDB();
   mysql_query("Delete From Agenda Where id = " . $id . ";", $conexion);
mysql_close($conexion);

header('Location: crud.php');

?>

</body>
</html>
