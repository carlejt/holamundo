<?php

function ConnectToDB(){
    $conexion = mysql_connect($_ENV["OPENSHIFT_DB_HOST"] . ":3306", "adminfcYCXwx", "d8tYKbFbPfvt");
    mysql_select_db("AgendaDB", $conexion);		
	return $conexion;
}

?>
