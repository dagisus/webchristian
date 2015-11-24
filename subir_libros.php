<?php 
// Recoge el comentario del formulario
$isbn = $_REQUEST["txt_isbn"];
$dewey = $_REQUEST["txt_dewey"];
$titulo = $_REQUEST["txt_titulo"];
$autor = $_REQUEST["txt_autor"];
$editorial = $_REQUEST["txt_editorial"];
$ejemplares = $_REQUEST["txt_ejemplares"];
$usuario = $_COOKIE["usuario_nombre"];

//Recoge el nombre del fichero que se habrá indicado en el formulario
$fichero = $_FILES["fichero"]["name"];
//Recoge la ubicación temporal del fichero en el servidor
$fichero_tmp = $_FILES["fichero"]["tmp_name"];

//Comprueba que se ha indicado un fichero en el formulario
if ($fichero == "") {
echo "¡Error! No se ha especificado ningun lugar \n";
}

//Ruta completa (incluido el nombre del fichero)
$destino = "images/libros/" . $fichero;

//Copia el fichero al directorio de nuestro servidor, cogiendolo de la ubicacion temporal
if (move_uploaded_file($fichero_tmp,$destino)) {
//Conecta con la Base de Datos e inserta la informacion en la ruta y comentario del fichero
$conexion = mysql_connect("localhost","root","");
mysql_select_db("proyecto",$conexion);
$sentencia = "INSERT INTO libros (isbn, dewey, titulo, autor, editorial, ejemplares, imagen_libro) VALUES ('" . $isbn . "','" . $dewey . "','" . $titulo . "','" . $autor . "','" . $editorial . "','" . $ejemplares . "','" . $destino . "')";
$resultado = mysql_query($sentencia,$conexion);
	if ($resultado) {
		// echo "El fichero se ha subido al servidor correctamente \n";
		echo"<script type=\"text/javascript\">alert('\Registro Exitoso\\nUsted esta siendo redireccionado a la pagina principal'); window.location='administrador.php';</script>";  
		
	//header("location:administrador.php");	
	
		}
}
else {
	echo"<script type=\"text/javascript\">alert('\Registro No Exitoso, Algo ha salido mal\\nUsted esta siendo redireccionado a la pagina principal'); window.location='administrador.php';</script>";
//echo "Se ha producido un error fatal";	
}

?>