<!DOCTYPE html>
<html>
<head>
	<title>Accesibilidad</title>
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
			<form class="formulario" action="ac.php" method="POST">
				<h1>Conceptos de Accesibilidad</h1>
				<ol>
					<li>¿Se proporciona un texto equivalente para todo elemento no textual, tales como imágenes, para explicar su contenido a discapacitados visuales?</li>
					<div>
				    	<input type="radio" id="op1" name="p1" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p1" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿La información transmitida a través de los colores también está disponible sin color?</li>
					<div>
						<input type="radio" id="op1" name="p2" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p2" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿El documento está estructurado para que pueda ser leído con o sin una hoja de estilo, utilizando adecuadamente los tags de HTML?</li>
					<div>
					    <input type="radio" id="op1" name="p3" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p3" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿El documento está escrito en un lenguaje adecuado y se deja claro cuando se cambia de idioma?</li>
					<div>
					    <input type="radio" id="op1" name="p4" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p4" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Las tablas se utilizan para presentar información y no para diagramar el contenido del Sitio Web?</li>
					<div>
					    <input type="radio" id="op1" name="p5" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p5" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Las páginas que utilizan nuevas tecnologías siguen funcionando cuando dicha tecnología no está presente (por ejemplo, los plug-ins de Flash)?</li>
					<div>
					    <input type="radio" id="op1" name="p6" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p6" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Es posible controlar los objetos o las páginas que se actualizan o se cambian automáticamente, permitiendo incluso generar pausas para su revisión?</li>
					<div>
					    <input type="radio" id="op1" name="p7" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p7" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Se asegura la accesibilidad de los elementos de la página que tengan sus propias interfaces? (Por ejemplo para el uso de Portlets)</li>
					<div>
					    <input type="radio" id="op1" name="p8" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p8" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Se permite al usuario activar elementos de las páginas, usando cualquier dispositivo como el mouse o el teclado y no sólo uno en particular?</li>
					<div>
					    <input type="radio" id="op1" name="p9" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p9" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Se ofrecen soluciones transitorias que permiten a usuarios con browsers antiguos, acceder a contenidos que han sido creados en nuevas tecnologías?</li>
					<div>
					    <input type="radio" id="op1" name="p10" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p10" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Se usan las tecnologías y guías de trabajo generadas por la W3C?</li>
					<div>
					    <input type="radio" id="op1" name="p11" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p11" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Se ofrece ayuda y orientación a los usuarios para entender páginas o elementos complejos dentro de ellas? (Por ejemplo: mapas y gráficos)</li>
					<div>
					    <input type="radio" id="op1" name="p12" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p12" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Se ofrecen elementos de navegación claros?</li>
					<div >
					    <input type="radio" id="op1" name="p13" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p13" value="1" required>
						<label for="op2">Cumple</label>
					</div>
					<li>¿Se asegura que los documentos que se ofrecen a través del Sitio son simples, claros y pueden ser fácilmente entendidos?</li>
					<div>
					    <input type="radio" id="op1" name="p14" value="0" required>
						<label for="op1">No cumple</label>
						<input type="radio" id="op2" name="p14" value="1" required>
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