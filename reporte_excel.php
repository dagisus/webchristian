<?php
include("conexion.php");
include("verificar_sesion.php");


header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_Inventario.xls");		

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE INVENTARIO</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr align="center">
    <td colspan="6" bgcolor="skyblue"><CENTER><strong>REPORTE DE INVENTARIO</strong></CENTER></td>
  </tr>
  <tr align="center" bgcolor="#FFFFFF">
    <td><strong>ISBN</strong></td>
    <td><strong>SIGNATURA TOPOGRAFICA</strong></td>
    <td><strong>TITULO</strong></td>
    <td><strong>AUTOR</strong></td>
    <td><strong>EDITORIAL</strong></td>
    <td><strong>EJEMPLARES</strong></td>
  </tr>
  
<?PHP
		
$sql=mysql_query("select isbn,dewey,titulo,autor,editorial,ejemplares from libros");
while($res=mysql_fetch_array($sql)){		

	$isbn=$res["isbn"];
	$dewey=$res["dewey"];
	$titulo=$res["titulo"];
	$autor=$res["autor"];
	$editorial=$res["editorial"];
	$ejemplares=$res["ejemplares"];					

?>  
 <tr align="center">
	<td><?php echo $isbn; ?></td>
	<td><?php echo $dewey; ?></td>
	<td><?php echo $titulo; ?></td>
	<td><?php echo $autor; ?></td>
	<td><?php echo $editorial; ?></td>
	<td><?php echo $ejemplares; ?></td>                     
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>