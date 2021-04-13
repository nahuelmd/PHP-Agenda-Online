<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/css/styles.css">
</head>

<body>

	<div class="container">
		
		<?php include("header.php"); ?>

		<section class="titulo-agendas">
			<h2>Agenda Online</h2>
		</section>

		<div class="form">
			<form class="formulario" method="POST" action="insertar_clases.php">

				<input type="text" name="unidad" require placeholder="Evento" maxlength="30">
				<input type="date" name="fecha" require placeholder="Fecha">
				<input type="submit" value="Cargar evento">

			</form>
			<div class="ver-agenda">
				<p> <a href="/ver_clases.php">Ver Agenda</a></p>
			</div>
		</div>

		<div class="detalle">
			<p>En este ejemplo se utiliza PHP para escribir la información del "evento" en base de datos, leerla y eliminarla <br> <a target="_blank" href="https://github.com/nahuelmd/PHP-Agenda-Online">Ver código fuente en GitHub</a></p>
		</div>

		<?php include("footer.php"); ?>

	</div>
</body>

</html>