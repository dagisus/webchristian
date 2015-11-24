<?php 
	require_once('conexion.php');

	sleep(1);

	$search = '';
	if (isset($_POST['search'])){
		$search = strtolower($_POST['search']);
	}

	$consulta = "SELECT * FROM libros WHERE titulo LIKE '%".$search."%' OR autor LIKE '%".$search."%' ORDER BY titulo ASC LIMIT 20";
	$resultado = $conexion->query($consulta);
	$fila = mysqli_fetch_assoc($resultado);
	$total = mysqli_num_rows($resultado);
?>
<?php if ($total>0 && $search!='') { ?>
	<h2>Resultados de la búsqueda</h2>
	<?php do { ?>
		<div class="art">
			<a href="resultado.php?id=<?php echo $fila['id'] ?>&search=<?php echo $search ?>">
			<span class="titulo"><?php echo str_replace($search, '<strong>'.$search.'</strong>', utf8_encode($fila['titulo'])) ?></span><br>

			<span class="contenido"><?php echo str_replace($search, '<strong>'.$search.'</strong>', substr(utf8_encode($fila['autor']),0,150)) ?></span><br>
			</a>

		</div>
	<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
<?php } 
elseif($total>0 && $search=='') echo '<h2>Ingresa un parámetro de búsqueda</h2><p>Ingresa palabras clave relacionadas con el tema de esta web</p>';
else echo '<h2>No se han encontrado resultados</h2><p>Inténta realizar tu búsqueda con palabras más especificas...</p>';
?>