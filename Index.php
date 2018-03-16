<html>
	<head>
		<title>
			Programa del dia de la mujer
		</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<body style="background-color:silver"
		<br>
		<br>
	    <font color = black face="Comic Sans MS,arial,verdana" size=6>Libro de visitas</font>
		<form name="frmprincipal" method="get" action="llenado.php" action="Consulta.php">
			
			<font color = black face="Comic Sans MS,arial,verdana" size=5>Nombre</font>
			 <input type="text" name="txtnombre">
			<br>
			<br>
			<font color = black face="Comic Sans MS,arial,verdana" size=5>Genero</font>
			<select name="txtgenero">
				<option>H</option>
				<option>M</option>
			</select>
			<br>
			<br>
			<font color = black face="Comic Sans MS,arial,verdana" size=5>Mensaje</font>
			<br>
			<textarea name="txtmensaje">
			</textarea>
			
			<br>
			<input type="submit" value="Enviar">

		</form>
	<a href="Consulta.php">Consultar libro de visitas</a>
	</body>
</html>
