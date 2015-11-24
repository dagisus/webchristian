<?Php
$conexion=mysql_connect("localhost","root","") or die("error" . mysqli_errno($conexion));
mysql_select_db("proyecto",$conexion) or die("Problemas en la seleccion de la base de datos");
?>
