<?php  
// Primero incluimos conexion.php 
include("conexion.php");

// Definimos la conexión 

function conectar(){ 
global $conexion; //Definición global para poder utilizar en todo el contexto 

$conexion = mysql_connect(HOST_DB, USER_DB, PASS_DB) 
or die ('NO SE HA PODIDO CONECTAR AL MOTOR DE LA BASE DE DATOS'); 

mysql_select_db(NAME_DB) 
or die ('NO SE ENCUENTRA LA BASE DE DATOS ' . NAME_DB); 
}

function desconectar(){ 
global $conexion; 

mysql_close($conexion); 
}  


?> 
<!DOCTYPE HTML>
<html><!-- InstanceBegin template="/Templates/index.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>BibSoft Lite</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- Custom Theme files -->


<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="BibSoft Lite, BibSoft" />
<link rel="shortcut icon" href="images/favicon.png">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
 
 <script type="text/javascript">
 function validar(){
	var valido=false; 
	var Usu=document.getElementById("txtusuario").value;
	var Cla=document.getElementById("txtclave").value;
	
	if(Usu=="") {alert("Ingrese Usuario");
	document.session.txtusuario.focus();}
	else if(Cla=="") {alert("Ingrese Contraseña");
	document.session.txtclave.focus();
	
	}else{
		valido=true;
	}
	
return valido;
 }
 </script>
 
</head>
<body>
			 <!-- InstanceBeginEditable name="todo" -->
<!-- banner -->
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script type="text/javascript">
			$(document).ready(function() {
				/*
				 *  Simple image gallery. Uses default settings
				 */
				$('.fancybox').fancybox();
			});
</script>

<div class="banner2">	  
	 <div class="header">
	   <div class="logo">
				 <a href="#"><img src="images/logo.jpg" alt=""/></a>
	   </div>
	   <div class="top-menu"> <span class="menu"></span>
	     <ul class="navig">
	       <li><a href="index.php">Inicio</a></li>
	       <li><a href="servicios.php">Servicios</a></li>
	       <li><a href="blog.php">Blog</a></li>
	       <li><a href="galeria.php">Galeria</a></li>
	       <li><a href="acerca.php">Acerca De</a></li>
	       <li><a href="contacto.php">Contacto</a></li>
         </ul>
       </div>
	   <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$("ul.navig").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->

<div class="clearfix"></div>

  </div>
</div>
<!---->
	  <div class="welcome">
		  <div class="container">
		    <div class="col-md-12 banner-grid">
		      <h3>Buscador</h3>
		      <div class="banner-grid-sec">
		        <form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		          <br>
		          <select name="idx" id="masthead_search">
		          <option value="cat">Cat&aacute;logo de biblioteca</option>
                    
	              </select>
                  <input type="text" id="buscar" name="buscar"  placeholder="Buscar aquí... Por Nombre del Libro o Autor..." autofocus >
		          <input name="Enviar" type="submit" id="searchsubmit" value="Buscar" method="post">
	            </form>
                <p>
                </p>
		      </div>
	        </div>
            <div class="clearfix"></div>
		  </div>
	  </div>
      
<div class="welcome">
	<div class="container">
   	  <div class="col-md-12">
        <h3>Resultado</h3><br />
        	<div class="banner-grid-sec">
            <form id="resultado" name="resultado" method="post">
            <table width="80%" border="0" align="center" class="table">
                <tr>
    				<td align="center"></td>
    				<td align="center"><strong>Isbn</strong></td>
                    <td align="center"><strong>Signatura Topografica</strong></td>
                    <td align="center"><strong>Titulo Libro</strong></td>
                    <td align="center"><strong>Autor Libro</strong></td>
                    <td align="center"><strong>Editorial</strong></td>
                    <td align="center"><strong>Ejemplares</strong></td>
  				</tr>
                
                <?php
							
					if($_POST){  

					$busqueda = trim($_POST['buscar']);  
					
					$entero = 0;  
					
							if (empty($busqueda)){ 
							$texto = 'Búsqueda sin resultados'; 
							
							}else{ 
							// Si hay información para buscar, abrimos la conexión 
							conectar(); 
							mysql_set_charset('utf8'); // para indicar a la bbdd que vamos a mostrar la info en utf 
							 
							//Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar 
							$sql = "SELECT * FROM libros WHERE titulo LIKE '%" .$busqueda. "%' OR autor LIKE '%" .$busqueda. "%' ORDER BY titulo, autor ASC";  
							
							$resultado = mysql_query($sql); //Ejecución de la consulta 
							
							$registros = "";
							
							//Si hay resultados... 	
							if (mysql_num_rows($resultado) > 0){
				
				 
							// Se recoge el número de resultados 
							$registros = '<p>SE HAN ENCONTRADO ' . mysql_num_rows($resultado) . ' REGISTROS </p>'; 
							// Se almacenan las cadenas de resultado 
							echo $registros;
								while($fila = mysql_fetch_assoc($resultado)){  
				?>
                
  				<tr>
                    <td align="center"><a class="fancybox" href="<?php echo $fila['imagen_libro']; ?>"> <?php echo "<img src=".$fila['imagen_libro']. " height='70' >" ;?></a></td>
    				<td align="center"><?php echo $fila['isbn']; ?></td>
                    <td align="center"><?php echo $fila['dewey']; ?></td>
                    <td align="center"><?php echo str_replace($fila['titulo'],"<span class='resaltado'>".$fila['titulo']."</span>",$fila['titulo']); ?></td>
                    <td align="center"><?php echo $fila['autor']; ?></td>
                    <td align="center"><?php echo $fila['editorial']; ?></td>
                    <td align="center"><?php echo $fila['ejemplares']; ?></td>
  				</tr>
  				<?php
				
								} 
							}else{ 
							$texto = "NO HAY RESULTADOS EN LA BBDD";
							echo"<script type=\"text/javascript\">alert('\No se encontraron resultados a tu busqueda\\nIntenta buscar nuevamente\\nProcura usar palabras clave'); window.location='buscar.php';</script>";
							//echo $texto; 
							}
							 
							// Después de trabajar con la bbdd, cerramos la conexión (por seguridad, no hay que dejar conexiones abiertas) 
							
						mysql_close($conexion); 
					} 

				} 			
				?>
                
			</table>
            </form>
        </div>
	  </div>
	</div>
   	<div class="clearfix"></div>
</div>

<!---->

<!----><!---->
<div class="copywrite">
	 <div class="container">
		 <p>Copyright © 2015 BibSoft Lite. All rights reserved | Adapted by <a href="http://w3layouts.com">Cristian Rondon</a></p>
	 </div>
</div>

<!---->
			 <!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>