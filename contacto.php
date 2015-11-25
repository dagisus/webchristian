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
				 <a href="index.html"><img src="images/logo.jpg" alt=""/></a>
			 </div>
			 <div class="top-menu">
				 <span class="menu"></span>
				 <ul class="navig">
			     <li><a href="index.php">Inicio</a></li>
			     <li><a href="servicios.php">Servicios</a></li>
			     <li><a href="blog.php">Blog</a></li>
			     <li><a href="galeria.php">Galeria</a></li>
			     <li><a href="acerca.php">Acerca De</a></li>
			     <li class="active"><a href="contacto.php">Contacto</a></li>
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
<!--contact-->
<div class="contact">
	 <div class="container">
		 <div class="main-head-section">
					<h2>Contacto</h2>
			<div class="contact-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.892352000187!2d-73.12654588568131!3d7.138445517690274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6815726c72428b%3A0xf796aec0b776f337!2sUDI+Universidad+Investigaci%C3%B3n+y+Desarrollo!5e0!3m2!1ses-419!2sco!4v1448465005911" width="100%" height="150px" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		 </div>
		 <div class="contact_top">			 		
			 <div class="col-md-8 contact_left">
			 		<h4>Envíanos un mensaje</h4>
			 		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere.</p>
					<form id="Enviar_Mensaje" name="Enviar_Mensaje" method="post" action="enviar.php">
					  <div class="form_details">
					    <input name="txt_nombre" type="text" class="text" required id="txt_nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nombre';}" value="Nombre" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" title="Minimo 1 caracteres">
					    <input name="txt_correo" type="text" class="text" required id="txt_correo" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Correo';}" value="Correo">
					    <input name="txt_tema"  type="text" class="text" required id="txt_tema" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tema';}" value="Tema">
					    <textarea name="txt_mensaje" required id="txt_mensaje" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Escribe Tu Mensaje Aqui...';}" value="Message">Mensaje
                        </textarea>
						  <div class="clearfix"> </div>
						 <div class="sub-button">
							 <input name="btn_enviar" type="submit" id="btn_enviar" value="Enviar">
						 </div>
					  </div>
				   </form>
			 </div>
			 <div class="col-md-3 company-right">
				 <div class="company_ad">
						<h3>Dirección</h3>
						<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit velit justo.</span>
			      	 <address>
						 <p>Correo : <a href="mailto:example@mail.com">info@bibsoft.com</a></p>
						 <p>Teléfono : (+57) 311 111 1111</p>
						 <p>Calle 555 # 44 - 33</p>
						 <p>Bucaramanga, Santander</p>									 	 	
					 </address>
				 </div>
			 </div>	
				<div class="clearfix"> </div>
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
		 <p>Copyright © 2015 BibSoft Lite. All rights reserved | Adapted by <a href="http://w3layouts.com">Cristian Rondon</a></p>
	 </div>
</div>
<!---->
			 <!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>