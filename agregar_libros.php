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

<script> 
var isbn1 = '978-0-596-52068-7';
var isbn2 = '978 0 596 52068 7';
var isbn3 = '9780596520687';
var isbn4_bad = '123.ABCD-978-0-596-BAD::DATA52068-7.x123';

var isbn1_clean = getOnlyIsbn13(isbn1);
var isbn2_clean = getOnlyIsbn13(isbn2);
var isbn3_clean = getOnlyIsbn13(isbn3);
var isbn4_clean = getOnlyIsbn13(isbn4_bad);

function getOnlyIsbn13(isbn) {
    var clean_input = isbn.replace(/\D+/g, '');
    var re = /(97[89])([0-9])([0-9]{3})([0-9]{5})([0-9])/gm;
    var m;

    while ((m = re.exec(clean_input)) !== null) {
        if (m.index === re.lastIndex) {
            re.lastIndex++;
        }
        $("#isbn").val($("#isbn").val() + m[0] + '\n'); // eg m[0] etc.
    }
}
</script>

                   <table class="table">	
			         <tr>
			           <td width="31%" title="El ISBN es el numero de identificación del libro"><a href="#">ISBN</a></td>
			           <td width="35%" align="center"><label for="txt_isbn"></label>
                       <input name="txt_isbn" type="text" id="isbn" value="" maxlength="20" required pattern="^(?:97[89]-)?[0-9]-[0-9]{3}-[0-9]{5}-[0-9]$" title="Si el ISBN es de 13 Digitos debe ser 978-x-xxx-xxxx-x Si el ISBN es de 10 Digitos debe ser 0-xxx-xxxxx-x"></td>
			           <td width="34%">&nbsp;</td>
		             </tr>
			         <tr>
			           <td title="Es la combinacion del SCDD Y CUTTER"><a href="#">Signatura Topografica</a></td>
			           <td align="center"><label for="txt_dewey"></label>
		               <input type="text" class="text-uppercase" name="txt_dewey" id="txt_dewey" required pattern="[a-zA-Z0-9]{3} [a-zA-Z][0-9]{2,3}[a-z]" title="El formato debe ser ABC/123 A123Z"></td>
			           <td><abbr title="Encontrar el SCDD">
                           <a href="javascript:abrir('Dewey.pdf')">*SCDD </a><br/>
                           <abbr title="Encontrar la Cutter">
                       <a href="javascript:abrir('http://www.unforbi.com.ar/herramientas/cutter/')">*Cutter</a></td>
		             </tr>
			         <tr>
			           <td title="Titulo del Libro"><a href="#">Título</a></td>
			           <td align="center"><label for="txt_titulo"></label>
		               <input type="text" class="text-uppercase" name="txt_titulo" id="txt_titulo" required></td>
			           <td>&nbsp;</td>
		             </tr>
			         <tr>
			           <td title="Nombre del Autor"><a href="#">Autor</a></td>
			           <td align="center"><label for="txt_autor"></label>
		               <input type="text" class="text-uppercase" name="txt_autor" id="txt_autor" required></td>
			           <td>&nbsp;</td>
		             </tr>
			         <tr>
			           <td title="Nombre de la Editorial"><a href="#">Editorial</a></td>
			           <td align="center"><label for="txt_editorial"></label>
		               <input type="text" class="text-uppercase" name="txt_editorial" id="txt_editorial" required></td>
			           <td>&nbsp;</td>
		             </tr>
			         <tr>
			           <td title="La cantidad de Libros que ingresará"><a href="#">Ejemplares</a></td>
			           <td align="center"><label for="txt_ejemplares"></label>
		               <input type="text" name="txt_ejemplares" id="txt_ejemplares" maxlength="3" required pattern="^\d{1,3}$" title="Tiene que agregar al menos 1 ejemplar. Solo numeros positivos son Recibidos."></td>
			           <td>&nbsp;</td>
		             </tr>
			         <tr>
			           <td title="Subir la portada del libro"><a href="#">Portada Libro</a></td>
			           <td align="center">
                       <input name="fichero" type="file" class="casilla" id="fichero" size="35" required> 
                       <input name="action" type="hidden" value="upload" /></td>
			           <td align="center">&nbsp;</td>
		             </tr>
			         <tr>
			           <td colspan="3" align="center"><input type="submit" class="sub-button" id="btnenviar" value="Guardar"></td>
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