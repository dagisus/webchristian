<?php 
// Recoge el comentario del formulario
$nombre = $_REQUEST["txt_nombre"];
$correo = $_REQUEST["txt_correo"];
$tema = $_REQUEST["txt_tema"];
$mensaje = $_REQUEST["txt_mensaje"];

$conexion = mysql_connect("localhost","root","");
mysql_select_db("proyecto",$conexion);
$sentencia = "INSERT INTO mensajes (nombre, correo, tema, mensaje) VALUES ('" . $nombre . "','" . $correo . "','" . $tema . "','" . $mensaje . "')";
$resultado = mysql_query($sentencia,$conexion);

if ($resultado) {
		// echo "El fichero se ha subido al servidor correctamente \n";
	header("location:index.php");	
	
}
else {
echo "No se ha podido enviar el mensaje";	
}

?>