<!DOCTYPE HTML>
<?php
include("verificar_sesion.php");
?>
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
           <li><a href="#modal1" class="Buttons" style="top:10px; position:fixed;">Menu Admin</a></li>
                        <div id="modal1" class="modalmask">
                            <div class="modalbox movedown">
                                <a href="#close" title="Close" class="close">X</a>
                                <div class="list-group">
                                    <a href="administrador.php" class="list-group-item- active"><h1>Menu Administrador</h1></a><br/>
                                        <div class="list-group-item-text">
                                        <table class="table" width="100%" border="0">
                                  <tr>
                                    <td><a href="agregar_libros.php" class="list-group-item- active">Modulo Agregar</a><br/></td>
                                    <td><a href="inventario.php" class="list-group-item- active">Modulo Gestión</a><br/></td>
                                  </tr>
                                  <tr>
                                    <td><a href="mensajes.php" class="list-group-item- active">Modulo Mensajeria</a><br/></td>
                                    <td><a href="info.php" class="list-group-item- active">Modulo Informativo</a><br/></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2" align="center"><a href="salir.php" class="list-group-item- active">Cerrar Sesión</a><br/></td>
                                    </tr>
                                        </table>
                                        </div>
                                </div>
                            </div>
                        </div>
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
		 <h2>Modulo Agregar</h2>
	   <p>&nbsp;</p>
		 <div class="welcm_sec">
		   <div class="center-block">
			 <div class="campus_head">
					 <h3>Agregar Libros</h3>
			   <p></p>
			 </div>
			 <form name="Crear_Libros" method="post" enctype="multipart/form-data" action="subir_libros.php">
			   <div class="clearfix">
			     <div class="bs-example">
<script> 
function abrir(url) { 
window.open(url,'','top=300,left=300,width=1000,height=1000') ; 
} 
</script>


                   <table class="table">	
			         <tr>
			           <td width="31%" title="El ISBN es el numero de identificación del libro"><a href="#">ISBN</a></td>
			           <td width="35%" align="center"><label for="txt_isbn"></label>
                       <input name="txt_isbn" type="text" id="isbn" autofocus tabindex="1" value="" maxlength="20" required pattern="^(?:97[89]-)?[0-9]-[0-9]{3}-[0-9]{5}-[0-9]$" title="Si el ISBN es de 13 Digitos debe ser 978-x-xxx-xxxx-x Si el ISBN es de 10 Digitos debe ser 0-xxx-xxxxx-x"></td>
			           <td width="34%">&nbsp;</td>
		             </tr>
			         <tr>
			           <td title="Es la combinacion del SCDD Y CUTTER"><a href="#">Signatura Topografica</a></td>
			           <td align="center"><label for="txt_dewey"></label>
		               <input type="text" class="text-uppercase" name="txt_dewey" id="txt_dewey" tabindex="2" required pattern="[a-zA-Z0-9]{3} [a-zA-Z][0-9]{2,3}[a-z]" title="El formato debe ser ABC/123 A123Z"></td>
			           <td><abbr title="Encontrar el SCDD">
                           <a href="javascript:abrir('Dewey.pdf')">*SCDD </a><br/>
                           <abbr title="Encontrar la Cutter">
                       <a href="javascript:abrir('http://www.unforbi.com.ar/herramientas/cutter/')">*Cutter</a></td>
		             </tr>
			         <tr>
			           <td title="Titulo del Libro"><a href="#">Título</a></td>
			           <td align="center"><label for="txt_titulo"></label>
		               <input type="text" class="text-uppercase" name="txt_titulo" id="txt_titulo" tabindex="3" required></td>
			           <td>&nbsp;</td>
		             </tr>
			         <tr>
			           <td title="Nombre del Autor"><a href="#">Autor</a></td>
			           <td align="center"><label for="txt_autor"></label>
		               <input type="text" class="text-uppercase" name="txt_autor" id="txt_autor" tabindex="4" required></td>
			           <td>&nbsp;</td>
		             </tr>
			         <tr>
			           <td title="Nombre de la Editorial"><a href="#">Editorial</a></td>
			           <td align="center"><label for="txt_editorial"></label>
		               <input type="text" class="text-uppercase" name="txt_editorial" id="txt_editorial" tabindex="5" required></td>
			           <td>&nbsp;</td>
		             </tr>
			         <tr>
			           <td title="La cantidad de Libros que ingresará"><a href="#">Ejemplares</a></td>
			           <td align="center"><label for="txt_ejemplares"></label>
		               <input type="text" name="txt_ejemplares" id="txt_ejemplares" tabindex="6" maxlength="3" required pattern="^\d{1,3}$" title="Tiene que agregar al menos 1 ejemplar. Solo numeros positivos son Recibidos."></td>
			           <td>&nbsp;</td>
		             </tr>
			         <tr>
			           <td title="Subir la portada del libro"><a href="#">Portada Libro</a></td>
			           <td align="center">
                       <input name="fichero" type="file" class="casilla" id="fichero" tabindex="7" size="35" required> 
                       <input name="action" type="hidden" value="upload" /></td>
			           <td align="center">&nbsp;</td>
		             </tr>
			         <tr>
			           <td colspan="3" align="center"><input type="submit" class="sub-button" id="btnenviar" tabindex="8" value="Guardar"></td>
		             </tr>
		           </table>
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