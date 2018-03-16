<html>
	<head>
		<title>
			Juanes
		</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<body style="background-color:silver">

		<style type="text/css">
		
		        tr td {
		        background-color:silver;

			    </style>
	
	</head>
	<body>
		<?php
			$nombre = $_GET["txtnombre"];
		    $genero = $_GET["txtgenero"];
			$mensaje = $_GET["txtmensaje"];

			$conexion = mysqli_connect("localhost","root","","diamujer");
			$consulta = mysqli_query($conexion,"insert into librovisitas values (\"$nombre\",\"$genero\",\"$mensaje\");");


			if($genero == "M"){
				echo "<script>alert('Feliz dia de la mujer');</script>";
			}else if($genero == "H"){
				echo "<script>alert('Felicidadez');</script>";
			}

		?>
		<h1>Libro de visitas</h1>

		<?php

			$conexion = mysqli_connect("localhost","root","","diamujer");
			$consulta = mysqli_query($conexion,"select * from librovisitas;");
			if (mysqli_num_rows($consulta) > 0) {
				echo "<table border=1>";
				echo "<tr><th colspan=4>Libro de Visitas</th></tr>";
				echo "<tr><th>Nombre</th><th>Genero</th><th>Mensaje</tr>";

				while ($registro = mysqli_fetch_array($consulta)){
					echo "<tr>";
					echo "<td>".$registro["nombre"]."</td>";
					 echo "<td>".$registro["genero"]."</td>"; 
					if($registro["genero"] == "H"){
						 echo "<td><strong style='color: blue;'>".$registro["mensaje"]."</strong></td>"; 
					}else if ($registro["genero"] == "M") {
						  echo "<td><strong style='color: purple;'>".$registro["mensaje"]."</strong></td>"; 
					}
					
				}
			}

	   // echo "<td>".$registro["mensaje"]."</td>"; 	
		?>
		<a href="Index.php" class="Juanes">Regresar menu principal</a>


		

		<br>
	</body>
</html>
