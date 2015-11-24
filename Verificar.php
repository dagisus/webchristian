<?php 
include("conexion.php");

$rst_usuario=mysql_query("SELECT * FROM usuario WHERE nom_usuario='". $_POST["txtusuario"] ."'and clave_usuario='". $_POST["txtclave"] ."'",$conexion) or die("Problemas en el select".mysql_error());;
$num_registros=mysql_num_rows($rst_usuario);
if ($num_registros>0)
{
$fila=mysql_fetch_array($rst_usuario);
setcookie("usuario_nombre",$fila["nom_usuario"]);
setcookie("usuario_factor",$fila["tipo_usuario"]);
session_start();
$_SESSION["usuariosesion"]=$fila["tipo_usuario"];

//validar acceso a formularios
if($_SESSION["usuariosesion"]=="Usuario")
{
header("location:estudiante.php");
}
else{
	echo"<script type=\"text/javascript\">alert('\Verificacion Exitosa\\nUsted esta siendo redireccionado a la pagina de Administrador'); window.location='administrador.php';</script>";  
//header("location:administrador.php");
	}
}

else{
	echo"<script type=\"text/javascript\">alert('\Usuario o Clave Erronea\\nVerifica los datos e intenta nuevamente'); window.location='index.php';</script>";  
//echo"Usuario o Clave Incorrecta";
mysql_close($conexion);
}
?>
