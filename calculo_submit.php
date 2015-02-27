<!DOCTYPE html>
<html>
<body>

<b> Resultado del Calculo </b><br>
<a href="index.html"> Inicio </a> <br><br><br>

<?php

$n = $_POST['numero'];
$acum = 0;

for ($x = 1; $x <= $n; $x++) {
   $acum = $acum + $x;
}

echo("SUMATORIA (" . $n . ") = " . $acum . "<br>");
?>

<br><br>
Test de Nube! creado por <b><i>Carlos E. Jimenez</i></b>


</body>
</html>
