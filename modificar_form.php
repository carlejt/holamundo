<!DOCTYPE html>
<html>
<body>

<?php
Include_once("conection.php");

$id = $_GET["id"];

$conexion = ConnectToDB();
   $result = mysql_query("Select nombre, telefono From Agenda Where id=" . $id . ";", $conexion);
mysql_close($conexion);


while($row = mysql_fetch_array($result, MYSQL_NUM)) {
  $nombre = $row[0];
  $telefono = $row[1];
}


echo "
<form name=\"formulario\" action=\"modificar_submit.php\" method=\"post\">
<b> Modificacion de contacto </b><br>
<a href=\"index.html\"> Inicio </a> <br><br><br>

<table border=0>

<tr>
 <td> Id </td>
 <td> <input type=\"text\" name=\"id\" value= \"" . $id . "\" readonly> </td>
</tr>

<tr>
 <td> Nombre </td>
 <td> <input type=\"text\" name=\"nombre\" value= \"" . $nombre . "\"> </td>
</tr>

<tr>
 <td> Telefono </td>
 <td> <input type=\"text\" name=\"telefono\" value= \"" . $telefono . "\"> </td>
</tr>

</table>

<br>
<input type=\"submit\" value=\"Modificar\">  
</form>
";

?>

<br><br>
Test de Nube! creado por <b><i>Carlos E. Jimenez</i></b>

</body>
</html>
