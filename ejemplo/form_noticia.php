<!DOCTYPE html>
<html>
<head>
	<title>FORMULARIO</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<form name="form1" id="form1" action="mostrar_notica.php" method="post" enctype="multipart/form-data">
	<div>
	<h1 id="titulo">Envia tu noticia</h1>
	</div>
	<div>
		<label for="titulo">Titulo : </label>
		<input type="text" name="titulo" id="titulo">
	</div>
	<div>
		<label for="categoria">Categoria : </label>
		<select name="categoria" id="categoria">
			<option value="0">Selecciona una categoria</option>
			<option value="Deporte">Deporte</option>
			<option value="Tecnologia">Tecnologia</option>
			<option value="Politica">Politica</option>
			<option value="Farandula">Farandula</option>
			<option value="Economia">Economia</option>
		</select>
	</div>
	<div>
		<label for="noticia">Noticia : </label>
		<textarea name="noticia" id="noticia" rows="6" cols="50"></textarea>
	</div>
	<div>
		<label>Imagen : </label>
		<input type="file" id="foto" name="foto" accept="Imagen/*" >
	</div>
	<div class="centro">
	<input type="submit" name="enviar" value="Enviar noticia" id="enviar">
	<input type="reset" name="limpiar" id="limpiar">
	</div>
</form>
</body>
</html>