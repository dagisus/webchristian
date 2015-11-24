<?Php
include("conexion.php");
include("verificar_sesion.php");

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
		 <h2>Modulo Informativo</h2>
	   <p>&nbsp;</p>
		 <div class="welcm_sec">
		   <div class="center-block">
			 <div class="campus_head">
					 <h3>Información Sobre  BibSoft</h3>
			 </div>
			 <form name="Eliminar_Libros" method="post" action="">
			   <div class="clearfix">
			     <div class="bs-example">
			       <p>&nbsp;</p>
			       <table class="table">
			         <tr>
			           <td colspan="2" align="center"><p>BibSoft Lite Version 1.0 incluye las siguientes funciones.</p>
		               <p>&nbsp;</p></td>
		             </tr>
			         <tr>
			           <td width="50%" align="center">Para Usuarios Registrados</td>
			           <td width="50%" align="center">Para Usuarios No Registrados</td>
		             </tr>
			         <tr>
			           <td align="center"><table width="100%" class="table">
			             <tr>
			               <td colspan="4" align="center">Administrador</td>
		                 </tr>
			             <tr>
			               <td align="center"><a href="agregar_libros.php">Modulo Agregar</a></td>
			               <td align="center"><a href="inventario.php">Modulo Inventario</a></td>
			               <td align="center"><a href="mensajes.php">Modulo Mensajeria</a></td>
			               <td align="center"><a href="info.php">Información</a></td>
		                 </tr>
			             <tr>
			               <td align="center">Agregar Libros</td>
			               <td align="center"><table width="100%" border="0" class="table">
			                 <tr>
			                   <td align="center">Gestionar Inventario</td>
			                   <td align="center">Modificar Libros</td>
		                     </tr>
			                 <tr>
			                   <td align="center">Eliminar Libros</td>
			                   <td align="center">Generar Reportes</td>
		                     </tr>
		                   </table></td>
			               <td align="center">Gestionar Mensajes</td>
			               <td align="center">Info sobre BibSoft Lite</td>
		                 </tr>
		               </table></td>
			           <td align="center"><table width="100%" class="table">
			             <tr>
			               <td colspan="2" align="center">Usuario Regular</td>
		                 </tr>
			             <tr>
			               <td width="50%" align="center"><a href="buscar.php">Modulo Buscar</a></td>
			               <td width="50%" align="center"><a href="contacto.php">Modulo Mensajeria</a></td>
		                 </tr>
			             <tr>
			               <td align="center">Agregar Libros</td>
			               <td align="center">Gestionar Mensajes</td>
		                 </tr>
		               </table></td>
		             </tr>
		           </table>
			       <p>&nbsp;</p>
			       <p>BibSoft actualmente es un proyecto universtiario, bajo la dirección de varios profesores, involucrando varias materias academmicas...</p>
			       <p>Ademas, por ser un prototipo de caracteristicas seleccionadas, solo tiene en pleno funcionamiento los modulos que se habilitaron en la version 1.0.</p>
			       <p>Eventualmente BibSoft tendra muchos más modulos disponibles para mejorar la experiencia del usuario.</p>
			     </div>
		       </div>
		     </form>
<div class="more_info">
		  <a href="salir.php"></a>
          <a href="salir.php"></a>
          <table width="50%" border="0" class="table">
            <tr>
              <td><a href="javascript:history.back(1)">Volver</a></td>
            </tr>
          </table>
</div>
		   </div>
			 <div class="clearfix"></div>
	   </div>
  </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p>Copyright © 2015 BibSoft Lite. All rights reserved | Adapted by <a href="http://w3layouts.com">Cristian Rondon</a></p>
	 </div>
</div>
<!---->
			 <!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>