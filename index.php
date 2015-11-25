<?php  

include("conexion.php");

// Primero definimos la conexión a la base de datos 
define('HOST_DB', 'localhost'); //Nombre del host, nomalmente localhost 
define('USER_DB', 'root');  //Usuario de la bbdd 
define('PASS_DB', 'AbcD1234');  //Contraseña de la bbdd 
define('NAME_DB', 'proyecto');  //Nombre de la bbdd  

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
//Variable que contendrá el resultado de la búsqueda 
$texto = ''; 
//Variable que contendrá el número de resgistros encontrados 
$registros = '';  

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
$sql = "SELECT * FROM libros WHERE titulo LIKE '%" .$busqueda. "%' OR autor LIKE '%" .$busqueda. "%' ORDER BY titulo, autor";  


$resultado = mysql_query($sql); //Ejecución de la consulta 

//Si hay resultados... 

if (mysql_num_rows($resultado) > 0){

 
// Se recoge el número de resultados 
$registros = '<p>HEMOS ENCONTRADO ' . mysql_num_rows($resultado) . ' registros </p>'; 
// Se almacenan las cadenas de resultado 
while($fila = mysql_fetch_assoc($resultado)){  
$texto .= $fila['titulo'] . "  "; 
$texto .= $fila['autor'] . '<br />';}  
}else{ 
$texto = "NO HAY RESULTADOS EN LA BBDD";	 
} 
// Después de trabajar con la bbdd, cerramos la conexión (por seguridad, no hay que dejar conexiones abiertas) 

mysql_close($conexion); 
} 
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
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/jquery.maskedinput.js" type="text/javascript"></script>

<script src="js/jquery.mask.js" type="text/javascript"></script>
<script src="js/jquery.mask.min.js" type="text/javascript"></script>

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
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>  
<div class="banner">	  
	 <div class="header">
	   <div class="logo">
				 <a href="#"><img src="images/logo.jpg" alt=""/></a>
	   </div>

			 <div class="top-menu"> <span class="menu"></span>
			   <ul class="navig">
			     <li class="active"><a href="index.php">Inicio</a></li>
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
	 <div class="slider">
		 <div class="caption">
			 <div class="container">
				  <div class="callbacks_container">
					  <ul class="rslides" id="slider">
						    <li><h3>Bienvenido a BibSoft Lite</h3></li>
							<li><h3>Da un recorrido por nuestra web</h3></li>	
							<li><h3>La p&aacute;gina a&uacute;n esta en desarrollo</h3></li>	
					  </ul>	
						<div class="clearfix"></div>
				  </div>
			  </div>
		  </div>
	  </div>
	  <div class="banner-grids">
		  <div class="container">
		    <div class="col-md-9 banner-grid">
		      <h3>Buscador</h3>
		      <div class="banner-grid-sec">
		        <form id="buscador" name="buscador" method="post" action="buscar.php">
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
		    <div class="col-md-3 banner-grid">
		      <h3>Iniciar Sesi&oacute;n</h3>
		      <div class="banner-grid-sec">
		        <form name="session" id="session" method="post" onSubmit="return validar()" action="verificar.php" >
		          Usuario:
                  <input name="txtusuario" type="search" required class="banner-grid-sec" id="txtusuario" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{6,20}$" title="Minimo 6 caracteres"/><br>
                  Contrase&ntilde;a:
                  <input name="txtclave" type="password" required class="banner-grid-sec" id="txtclave" pattern="^(?=(?:[^\d]*\d){1})(?=(?:[^a-z]*[a-z]){1})(?=(?:[^A-Z]*[A-Z]){1})(?!.*\s).*$"/ title="La contraseña debe tener 1 Mayuscula y 1 Minuscula, Minimo 8 caracteres alfanumericos">
                  <input value="Acceso" type="submit" id="btnenviar">
	            </form>
                <p> </p>
		      </div>
	        </div>
		    <div class="clearfix"></div>
		  </div>
	  </div>
</div>
<!---->
<div class="welcome">
	 <div class="container">
		 <h2>Bienvenido a la pagina de Inicio de BibSoft Lite</h2>
		 <div class="welcm_sec">
			 <div class="col-md-9 campus">
				 <div class="campus_head">
					 <h3>Inicio</h3>
					 <p>La biblioteca escolar se define como una institución del sistema social que organiza materiales bibliográficos, audiovisuales y otros medios y los pone a disposición de una comunidad educativa. La biblioteca de la Fundación Colegio UIS es un lugar de conocimiento y aprendizaje, que alberga una colección organizada y centralizada de todos los materiales informativos como libros, enciclopedias, atlas, discos compactos, etc., que necesita el colegio para desarrollo de las diferentes tareas docentes.</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/w1.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Aliquam sit amet</a></h5>
					 <p>Modulos para estudiates</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/w3.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Aliquam sit amet</a></h5>
					 <p>Modulos de estudio</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/w2.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Aliquam sit amet</a></h5>
					 <p>Modulos de aprendizaje</p>
				 </div>
				 <div class="col-md-3 wel_grid">
					 <img src="images/w4.jpg" class="img-responsive" alt=""/>
					 <h5><a href="#">Aliquam sit amet</a></h5>
					 <p>Modulos de prestamo</p>
				 </div>
				 <div class="clearfix"></div>
				 <div class="more_info">
						 <a href="blog.html">PROXIMAMENTE....</a>
				 </div>
			 </div>
			 <div class="col-md-3 testimonal">
					<h3>Testimonios</h3>
					<div class="testimnl-grid">
						 <a href="#"><p>Aenean ultrices commodo risus, id sollicitudin nunc commodo at. Sed sagittis, lacus id viverra eleifend, enim magna.</p></a>
						 <h5>An&oacute;nimo</h5>
					</div>
					<div class="testimnl-grid">
						 <a href="#"><p>Aenean ultrices commodo risus, id sollicitudin nunc commodo at. Sed sagittis, lacus id viverra eleifend, enim magna.</p></a>
						 <h5>An&oacute;nimo</h5>
					</div>
					<div class="testimnl-grid">
						 <a href="#"><p>Aenean ultrices commodo risus, id sollicitudin nunc commodo at. Sed sagittis, lacus id viverra eleifend, enim magna.</p></a>
						 <h5>An&oacute;nimo</h5>
					</div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="news">
	 <div class="container">
		 <h3>Fechas Destacadas</h3>
		  <div class="event-grids">			
		     <div class="col-md-3 event-grid">
				 <div class="date">
				     <h4>02</h4>
					 <span>08/2015</span>
				 </div>				 
			     <div class="event-info">
					  <h5><a href="#">Inicio del Proyecto</a></h5>
						<p>Empieza la idea de BibSoft</p>					
				 </div>
				 <div class="clearfix"></div>				 			 
			 </div>
			 <div class="col-md-3 event-grid">
				 <div class="date">
				     <h4>07</h4>
					 <span>10/2015</span>
				 </div>				 
			     <div class="event-info">
					  <h5><a href="#">Segunda Entrega del Proyecto</a></h5>
						<p>Pendiente por contenido.</p>					
				 </div>
				 <div class="clearfix"></div>				 			 
			 </div>
			 <div class="col-md-3 event-grid">
			   <div class="date">
			     <h4>25</h4>
			     <span>11/2015</span> </div>
			   <div class="event-info">
			     <h5><a href="#">Entrega Final del Proyecto</a></h5>
			     <p>Este sera el ultimo dia para presentar el proyecto.</p>
		       </div>
			   <div class="clearfix"></div>
		    </div>
            <div class="col-md-3 event-grid">
			   <div class="date">
			     <h4>27</h4>
			     <span>11/2015</span> </div>
			   <div class="event-info">
			     <h5><a href="#">Sustentacion del Proyecto</a></h5>
			     <p>Fecha final para sustentar.</p>
		       </div>
			   <div class="clearfix"></div>
		    </div>
			 <div class="clearfix"></div>	
		 </div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <div class="ftr-sec">
			 <div class="col-md-6 ftr-grid">
				 <h3>¿Es realmente importante la biblioteca?</h3>
			   <p>La biblioteca es un lugar de encuentro, de comunicación e intercambio de ideas donde se desarrollan experiencias interdisciplinares y 
               se abordan los contenidos temáticos de los más diversos géneros literarios existentes en la unidad de información para niños y para adultos. 
               La biblioteca escolar es un instrumento de desarrollo del currículo y permite el fomento de la lectura y la formación de una actitud científica, 
               constituye un elemento que forma el individuo para el aprendizaje, fomenta la creatividad, la comunicación y facilita la recreación</p>
			 </div>
			 <div class="col-md-3 ftr-grid2">
				 <h3>Paginas</h3>
				 <ul>
					 <li><a href="index.php"><span></span>Inicio</a></li>
					 <li><a href="servicios.php"><span></span>Servicios</a></li>
					 <li><a href="blog.php"><span></span>Blog</a></li>	
					 <li><a href="galeria.php"><span></span>Galeria</a></li>
                 	 <li><a href="acerca.php"><span></span>Acerca De</a></li>
					 <li><a href="contacto.php"><span></span>Contacto</a></li>
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid3">
			   <h3>Links de Interes</h3>
				 <ul>
					 <li><a href="#"><span></span>Lorem ipsum</a></li>
					 <li><a href="#"><span></span>Lorem ipsum</a></li>
					 <li><a href="#"><span></span>Lorem ipsum</a></li>
					 <li><a href="#"><span></span>Lorem ipsum</a></li>	
					 <li><a href="#"><span></span>Lorem ipsum</a></li>
					 <li><a href="#"><span></span>Lorem ipsum</a></li>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p>Copyright &copy; 2015 BibSoft Lite. All rights reserved | Adapted by <a href="http://w3layouts.com">Cristian Rondon</a></p>
	 </div>
</div>
<!---->
			 <!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>