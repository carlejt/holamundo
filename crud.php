<!DOCTYPE html>
<html>

<body>

<b>Agenda telefonica</b><br>
<a href="index.html"> Inicio </a> <br><br><br>

<?php
Include_once("conection.php");


$conexion = ConnectToDB();
   $result = mysql_query("Select id, nombre, telefono from Agenda;", $conexion);
mysql_close($conexion);


echo "<table border='1'>
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Telefono</th>
<th>Acciones</th>
</tr>

<tr>
<td> - </td>
<td> - </td>
<td> - </td>
<td><a href=\" registrar_form.html\"> Agregar contacto </a></td>
</tr>";

while($row = mysql_fetch_array($result, MYSQL_NUM)) {
  echo "<tr>";
  echo "<td>" . $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
  echo "<td>" . $row[2] . "</td>";
  echo "<td>" . "<a href=\"modificar_form.php?id=" . $row[0] . "\"> modificar </a>" . "|" . "<a href=\"eliminar.php?id=" . $row[0] . "\"> eliminar </a>";
  echo "</tr>";
}

echo "</table>";

?>

<br><br>
Test de Nube! creado por <b><i>Carlos E. Jimenez</i></b>
</body>
</html>
