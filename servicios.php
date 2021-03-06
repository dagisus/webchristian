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
<div class="banner2">	  
	 <div class="header">
	   <div class="logo">
				 <a href="#"><img src="images/logo.jpg" alt=""/></a>
	   </div>

			 <div class="top-menu"> <span class="menu"></span>
			   <ul class="navig">
			     <li><a href="index.php">Inicio</a></li>
			     <li class="active"><a href="servicios.php">Servicios</a></li>
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
</div>
<!---->
<div class="welcome">
	 <div class="container">
		 <h2>¿Que Servicios Ofrece BibSoft Lite?</h2>
		 <div class="welcm_sec">
			 <div class="col-md-9 campus">
				 <div class="campus_head">
					 <h3>Servicios</h3>
				   <p><strong>La Biblioteca de Fundación Colegio UIS</strong> cuenta con diversos servicios para ofrecer a sus usuarios. Dentro de los cuales resaltan:</p>
				   <p><strong>Formación de Usuarios:</strong></p>
				   <p>Con este programa se busca generar espacios de cualificación y capacitación de los usuarios en lo referente al manejo de información con fundamento en nuevos enfoques pedagógicos, de forma tal que la biblioteca se constituya en apoyo a la academia para la apropiación de conocimiento. <br>
				     Se brinda mediante charlas de inducción para estudiantes que desconozcan el uso del sistema. Estos programas se realizan en la biblioteca, cuando el estudiante precisa conocer información que desconoce.</p>
				   <p><strong>Consulta en sala:</strong> </p>
				   <p>En este servicio el usuario presenta el carné y solicita el material bibliográfico de su interés, para ser consultado dentro de la sala de lectura de la biblioteca.</p>
				   <p><strong>Préstamo:</strong></p>
				   <p>Posibilidad de retirar de la biblioteca por un periodo determinado y de acuerdo a la reglamentacion establecida, material bibliográfico requerido por el usuario.</p>
				   <p><strong>Referencia:</strong></p>
				   <p>Orientación y asesoría al usuario en la búsqueda y suministro de fuentes de información bibliográfica.</p>
				 </div>
		     <div class="clearfix"></div>
</div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="news"></div>
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