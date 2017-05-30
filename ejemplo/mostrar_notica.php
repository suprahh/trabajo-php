<!DOCTYPE html>
<html>
<head>
	<title>Mostrando tu imagen</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body >
<form name="form1" id="form1" action="mostrar_notica.php" method="post">
<div >
	<h1 id="tituloNoticia">
		<?php echo $_POST['titulo'];  ?>
	</h1>
	<h3 id="categoriaNoticia">
		<?php echo $_POST['categoria'];  ?>
	</h3>
</div>
<div id="cuerpo">
	<div id="imagen">
	<?php
	
	
	$rutaFoto = "fotos/".$_FILES['foto']['name'];
	if (move_uploaded_file($_FILES['foto']['tmp_name'], $rutaFoto )) {
			
			echo "<img src='" . $rutaFoto . "'/>";
		}
		else {
			echo "no se copio";				
			}	
		

	?>
	</div>
	<div id="noticiaMostrar">
		<span>
			<?php
		$noticia = $_POST['noticia'];
		echo $noticia;
		?>
		</span>	
	</div>	
</div>
	
</form>

</body>
</html>