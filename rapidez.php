<!DOCTYPE html>
<html>
<head>
	<title>Rapidez Acceso</title>
	<meta charset="UTF-8">
	<link href="CSS/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header class="contenedor">
		<div class="logo-contenedor">
			<img src="IMG/logo.png" width="150px" height="200px"></a>
			<div class="banner-contenedor">
			<img src="IMG/banner.jpg" width="750px" height="190px"></a>
		</div>
	</header> 

		<div class="contenedor">

			<ul class="menu">	
				<li><input type="search" name="buscador" placeholder="Buscar...">
					<input type="submit" value="Buscar"></li>
					<li></li>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Empresa</a>
						<ul>
							<li><a href="#">SubMenu 1</a></li>
							<li><a href="#">SubMenu 2</a></li>
							<li><a href="#">SubMenu 3</a></li>
							<li><a href="#">SubMenu 4</a>
								<ul>
									<li><a href="#">Cinco</a></li>
									<li><a href="#">Seis</a></li>
									<li><a href="#">Siete</a></li>
									<li><a href="#">Ocho</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#">Contacto</a>
						<ul>
							<li><a href="#">Teléfono</a></li>
							<li><a href="#">Correo</a></li>
							<li><a href="#">Redes Sociales</a>
								<ul>
									<li><a href="#">Instagram</a></li>
									<li><a href="#">Facebook</a></li>
									<li><a href="#">Twitter</a></li>
									<li><a href="#">WhatsApp</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
		</div>
		<div class="contenedor">
			<form class="formulario" action="rap.php" method="POST">
				<h1>Conceptos de Rapidez de Acceso</h1>
				<ol>
					<li>¿El usuario puede encontrar en no más de 3 clics la información buscada?</li>
					<div>
					    <input type="radio" id="op1" name="p1" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p1" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Aparece el menú de navegación en un lugar destacado? ¿Se ve fácilmente?</li>
					<div>
					    <input type="radio" id="op1" name="p2" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p2" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿El Sitio cuenta con un mapa y/o buscador que dé un acceso alternativo a los contenidos?</li>
					<div>
				   		<input type="radio" id="op1" name="p3" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p3" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Es fácil llegar a las secciones más importantes del Sitio desde cualquier página?</li>
					<div>
					    <input type="radio" id="op1" name="p4" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p4" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿El Sitio mantiene una navegación consistente y coherente en todas sus páginas?</li>
					<div>
					    <input type="radio" id="op1" name="p5" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p5" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿El diseño usa jerarquías visuales para determinar lo importante con una sola mirada?</li>
					<div>
					    <input type="radio" id="op1" name="p6" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p6" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Los formularios ofrecen opciones que permitan al usuario evitar, cancelar o rehacer una acción?</li>
					<div>
					    <input type="radio" id="op1" name="p7" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p7" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿El tamaño de la letra de los textos es adecuado y ajustable o modificable por el usuario usando las herramientas del programa visualizador?</li>
					<div>
					    <input type="radio" id="op1" name="p8" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p8" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Los vínculos, imágenes e íconos son claramente visibles y distinguibles?</li>
					<div>
					    <input type="radio" id="op1" name="p9" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p9" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Los vínculos (links) visitados y no visitados son claramente diferenciables?</li>
					<div>
					    <input type="radio" id="op1" name="p10" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p10" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Los íconos son representativos de la función o acción que realizan y son aclarados mediante una etiqueta ALT en HTML?</li>
					<div>
					    <input type="radio" id="op1" name="p11" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p11" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Todas las páginas cuentan con un título que indique el nombre de la institución e información de contactos virtuales y físicos al pie de la página?</li>
					<div>
					    <input type="radio" id="op1" name="p12" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p12" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Provee información del organigrama de la institución?, ¿Incluye nombres actualizados de las autoridades y la forma de contactarlos?</li>
					<div>
					    <input type="radio" id="op1" name="p13" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p13" value="1" required>
						<label for="op2">Cumple</label>
					<li>¿El nombre de la URL está vinculado con el nombre o función de la institución y se ofrece en la barra superior del programa visualizador?</li>
					<div>
					    <input type="radio" id="op1" name="p14" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p14" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Ofrece el Sitio contenidos sobre la visión, misión, objetivos y plan estratégico de la institución?</li>
					<div>
					    <input type="radio" id="op1" name="p15" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p15" value="1" required>
						<label for="op2">Cumple</label>
					<li>En el caso que existan palabras técnicas en los contenidos del Sitio ¿Existe una sección de glosario que las explique?, ¿es fácil llegar a él?</li>
					<div>
					    <input type="radio" id="op1" name="p16" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p16" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Ofrece páginas de ayuda que explican cómo usar el Sitio Web?</li><div>
					    <input type="radio" id="op1" name="p17" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p17" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Ofrece área de Preguntas Frecuentes con datos de ayuda a usuarios?</li>
					<div>
					    <input type="radio" id="op1" name="p18" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p18" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>En caso de errores de consistencia dentro del sitio, ¿se ofrece un mensaje de personalizado mediante una página explicativa?, (Por ejemplo: Error 404 para página inexistente)</li>
					<div>
					    <input type="radio" id="op1" name="p19" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p19" value="1" required>
						<label for="op2">Cumple</label>
					</div>
				</ol><br><br>
				<input class="bot" type="submit" value="Guardar">
			</form>
		</div>
		<footer class="pie contenedor">
			<p> Página diseñada por <a href="mailto:fatb86@outlook.com">Fabián Toro</a> y <a href="mailto:jessy.696@gmail.com">Jessica Parra</a></p>
		</footer> 
</body>
</html>