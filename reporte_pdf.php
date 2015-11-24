<?php
include("conexion.php");
include("verificar_sesion.php");
require_once("dompdf/dompdf_config.inc.php");
		

$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" bgcolor="skyblue"><CENTER><strong>REPORTE DE INVENTARIO</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
    <td><strong>ISBN</strong></td>
    <td><strong>SIGNATURA TOPOGRAFICA</strong></td>
    <td><strong>TITULO</strong></td>
    <td><strong>AUTOR</strong></td>
    <td><strong>EDITORIAL</strong></td>
    <td><strong>EJEMPLARES</strong></td>
  </tr>';
  


$sql=mysql_query("select * from libros");
while($res=mysql_fetch_array($sql)){
$codigoHTML.='	
	<tr>
		<td>'.$res['isbn'].'</td>
		<td>'.$res['dewey'].'</td>
		<td>'.$res['titulo'].'</td>
		<td>'.$res['autor'].'</td>
		<td>'.$res['editorial'].'</td>
		<td>'.$res['ejemplares'].'</td>										
	</tr>';
	
}
$codigoHTML.='
</table>
</body>
</html>';
$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reporte_Inventario.pdf");
?>