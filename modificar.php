<?php 
include("conexion.php");

//Recoge el nombre del fichero que se habrá indicado en el formulario
$fichero = $_FILES["fichero"]["name"];
//Recoge la ubicación temporal del fichero en el servidor
$fichero_tmp = $_FILES["fichero"]["tmp_name"];

//Ruta completa (incluido el nombre del fichero)
$destino = "images/libros/" . $fichero;

//Copia el fichero al directorio de nuestro servidor, cogiendolo de la ubicacion temporal
if (move_uploaded_file($fichero_tmp,$destino)) {


mysql_select_db("proyecto",$conexion);
mysql_query("UPDATE libros SET 
isbn='". $_POST["txt_isbn"] ."' , 
dewey='". $_POST["txt_dewey"] ."' , 
titulo='". $_POST["txt_titulo"] ."' , 
autor='". $_POST["txt_autor"] ."' , 
editorial='". $_POST["txt_editorial"] ."' , 
ejemplares='". $_POST["txt_ejemplares"] ."' ,
imagen_libro='". $destino ."' WHERE id_libro=". $_REQUEST["id"].";", $conexion);  

}
 
if (mysql_errno()>0){
	echo"<script type=\"text/javascript\">alert('\Modificacion No Realizada\\nUsted esta siendo redireccionado a la pagina de inventario'); window.location='inventario.php';</script>";  
	//echo "Error ". mysql_error();
}
else{
	echo"<script type=\"text/javascript\">alert('\Modificacion Realizada Con Exito\\nUsted esta siendo redireccionado a la pagina de inventario'); window.location='inventario.php';</script>";  
	//header("location:inventario.php");
}
mysql_close($conexion);
?>