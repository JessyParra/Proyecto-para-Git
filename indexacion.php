<!DOCTYPE html>
<html>
<head>
	<title>Indexación buscadores</title>
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
			<form class="formulario" action="ind.php" method="POST">
				<h1>Conceptos de Indexación en Buscadores</h1>
				<ol>
					<li>Todos los nuevos documentos que se agregan al Sitio Web ¿incluyen los campos de Metadata adecuados?</li>
					<div>
					    <input type="radio" id="op1" name="p1" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p1" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>Cuando un usuario accede al Sitio mediante un Link ofrecido en un buscador y esta página ya no existe, ¿se ofrece un mensaje personalizado que le permita encontrarla en su nueva ubicación o le ofrezca un contenido alternativo?</li>
					<div>
					    <input type="radio" id="op1" name="p2" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p2" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Tiene definido el texto que aparece en el tag HTML <"title"> para indicar el Nombre del Sitio o de la Institución?</li>
					<div>
					    <input type="radio" id="op1" name="p3" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p3" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿El Sitio ofrece un contenido adecuado para el tag HTML META NAME="description"?</li>
					<div>
					    <input type="radio" id="op1" name="p4" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p4" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿El Sitio ofrece un contenido adecuado para el tag HTML META NAME="keywords"?</li>
					<div>
					    <input type="radio" id="op1" name="p5" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p5" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿El Sitio ofrece un texto adecuado en el texto que aparece en el META tag NAME="robots"?</li>
					<div>
					    <input type="radio" id="op1" name="p6" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p6" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿El Sitio cuenta con un archivo de texto Robots.txt para los directorios que no se desea indexar?</li>
					<div>
					    <input type="radio" id="op1" name="p7" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p7" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿El Sitio está indexado en el directorio DMOZ.org?</li>
					<div>
					    <input type="radio" id="op1" name="p8" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p8" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿El Sitio está indexado en los buscadores Google y Altavista?</li>
					<div>
					    <input type="radio" id="op1" name="p9" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p9" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Ha definido como tarea permanente la de revisar la presencia del Sitio en Buscadores?</li>
					<div>
					    <input type="radio" id="op1" name="p10" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p10" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Ha definido como tarea permanente la realización de alianzas e intercambio de enlaces con otros Sitios de instituciones del Sector Público?</li>
					<div>
					    <input type="radio" id="op1" name="p11" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p11" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Revisa periódicamente el LOG (bitácora) del Sitio para identificar las palabras más utilizadas por los usuarios para acceder a su Sitio?</li>
					<div>
					    <input type="radio" id="op1" name="p12" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p12" value="1" required>
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