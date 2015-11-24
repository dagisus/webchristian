<?php
include ("conexion.php");
include ("verificar_sesion.php");

mysql_query("DELETE FROM mensajes WHERE id_mensaje='". $_REQUEST ["archivo"] . "';",$conexion);

if (mysql_errno() !=0)
{
	echo "NO SE HA PODIDO ELIMINAR EL MENSAJES ", mysql_errno(). " - ", mysql_error();
	mysql_close($conexion);
}else{
	mysql_close($conexion);
header("location:mensajes.php");
}
?>