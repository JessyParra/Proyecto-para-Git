<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Resultados</title>
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
				<h1>Usabilidad</h1>
				<table>
					<th>No cumple</th>
					<th>Cumple</th>
					
					<?php 
					$seltotal = $con ->query("SELECT count(cumple) as totales FROM usabilidad");
					$rstotal=mysqli_fetch_assoc($seltotal);
					$total=$rstotal['totales'];

					$selsi = $con ->query("SELECT count(cumple) as totalsi FROM usabilidad where cumple = 1");
					$rssi=mysqli_fetch_assoc($selsi);
					$totalsi=$rssi['totalsi'];

					$selno = $con ->query("SELECT count(cumple) as totalno FROM usabilidad where cumple = 0");
					$rsno=mysqli_fetch_assoc($selno);
					$totalno=$rsno['totalno'];


					$porcentajeSI = ($totalsi * 100)/$total;
					$porcentajeSIFix = number_format($porcentajeSI, 2, ',', '.');

					$porcentajeNO = ($totalno * 100)/$total;
					$porcentajeNOFix = number_format($porcentajeNO, 2, ',', '.');
					?>
					<tr>						
						<td><?php echo $porcentajeSIFix ?>%</td>
						<td><?php echo $porcentajeNOFix ?>%</td>
					</tr>				
				</table><br>

				<h1>Presencia en internet</h1>
				<table>
					<th>No cumple</th>
					<th>Cumple</th>
					
					<?php 
					$seltotal = $con ->query("SELECT count(cumple) as totales FROM presencia");
					$rstotal=mysqli_fetch_assoc($seltotal);
					$total=$rstotal['totales'];

					$selsi = $con ->query("SELECT count(cumple) as totalsi FROM presencia where cumple = 1");
					$rssi=mysqli_fetch_assoc($selsi);
					$totalsi=$rssi['totalsi'];

					$selno = $con ->query("SELECT count(cumple) as totalno FROM presencia where cumple = 0");
					$rsno=mysqli_fetch_assoc($selno);
					$totalno=$rsno['totalno'];


					$porcentajeSI = ($totalsi * 100)/$total;
					$porcentajeSIFix = number_format($porcentajeSI, 2, ',', '.');

					$porcentajeNO = ($totalno * 100)/$total;
					$porcentajeNOFix = number_format($porcentajeNO, 2, ',', '.');
					?>
					<tr>						
						<td><?php echo $porcentajeSIFix ?>%</td>
						<td><?php echo $porcentajeNOFix ?>%</td>
					</tr>				
				</table><br>

				<h1>Accesibilidad</h1>
				<table>
					<th>No cumple</th>
					<th>Cumple</th>
					
					<?php 
					$seltotal = $con ->query("SELECT count(cumple) as totales FROM accesibilidad");
					$rstotal=mysqli_fetch_assoc($seltotal);
					$total=$rstotal['totales'];

					$selsi = $con ->query("SELECT count(cumple) as totalsi FROM accesibilidad where cumple = 1");
					$rssi=mysqli_fetch_assoc($selsi);
					$totalsi=$rssi['totalsi'];

					$selno = $con ->query("SELECT count(cumple) as totalno FROM accesibilidad where cumple = 0");
					$rsno=mysqli_fetch_assoc($selno);
					$totalno=$rsno['totalno'];


					$porcentajeSI = ($totalsi * 100)/$total;
					$porcentajeSIFix = number_format($porcentajeSI, 2, ',', '.');

					$porcentajeNO = ($totalno * 100)/$total;
					$porcentajeNOFix = number_format($porcentajeNO, 2, ',', '.');
					?>
					<tr>						
						<td><?php echo $porcentajeSIFix ?>%</td>
						<td><?php echo $porcentajeNOFix ?>%</td>
					</tr>				
				</table><br>

				<h1>Rapidez de acceso</h1>
				<table>
					<th>No cumple</th>
					<th>Cumple</th>
					
					<?php 
					$seltotal = $con ->query("SELECT count(cumple) as totales FROM rapidez");
					$rstotal=mysqli_fetch_assoc($seltotal);
					$total=$rstotal['totales'];

					$selsi = $con ->query("SELECT count(cumple) as totalsi FROM rapidez where cumple = 1");
					$rssi=mysqli_fetch_assoc($selsi);
					$totalsi=$rssi['totalsi'];

					$selno = $con ->query("SELECT count(cumple) as totalno FROM rapidez where cumple = 0");
					$rsno=mysqli_fetch_assoc($selno);
					$totalno=$rsno['totalno'];


					$porcentajeSI = ($totalsi * 100)/$total;
					$porcentajeSIFix = number_format($porcentajeSI, 2, ',', '.');

					$porcentajeNO = ($totalno * 100)/$total;
					$porcentajeNOFix = number_format($porcentajeNO, 2, ',', '.');
					?>
					<tr>						
						<td><?php echo $porcentajeSIFix ?>%</td>
						<td><?php echo $porcentajeNOFix ?>%</td>
					</tr>				
				</table><br>

				<h1>Indexación buscadores</h1>
				<table>
					<th>No cumple</th>
					<th>Cumple</th>
					
					<?php 
					$seltotal = $con ->query("SELECT count(cumple) as totales FROM indexacion");
					$rstotal=mysqli_fetch_assoc($seltotal);
					$total=$rstotal['totales'];

					$selsi = $con ->query("SELECT count(cumple) as totalsi FROM indexacion where cumple = 1");
					$rssi=mysqli_fetch_assoc($selsi);
					$totalsi=$rssi['totalsi'];

					$selno = $con ->query("SELECT count(cumple) as totalno FROM indexacion where cumple = 0");
					$rsno=mysqli_fetch_assoc($selno);
					$totalno=$rsno['totalno'];


					$porcentajeSI = ($totalsi * 100)/$total;
					$porcentajeSIFix = number_format($porcentajeSI, 2, ',', '.');

					$porcentajeNO = ($totalno * 100)/$total;
					$porcentajeNOFix = number_format($porcentajeNO, 2, ',', '.');
					?>
					<tr>						
						<td><?php echo $porcentajeSIFix ?>%</td>
						<td><?php echo $porcentajeNOFix ?>%</td>
					</tr>				
				</table><br>

				<h1>Seguridad</h1>
				<table>
					<th>No cumple</th>
					<th>Cumple</th>
					
					<?php 
					$seltotal = $con ->query("SELECT count(cumple) as totales FROM seguridad");
					$rstotal=mysqli_fetch_assoc($seltotal);
					$total=$rstotal['totales'];

					$selsi = $con ->query("SELECT count(cumple) as totalsi FROM seguridad where cumple = 1");
					$rssi=mysqli_fetch_assoc($selsi);
					$totalsi=$rssi['totalsi'];

					$selno = $con ->query("SELECT count(cumple) as totalno FROM seguridad where cumple = 0");
					$rsno=mysqli_fetch_assoc($selno);
					$totalno=$rsno['totalno'];


					$porcentajeSI = ($totalsi * 100)/$total;
					$porcentajeSIFix = number_format($porcentajeSI, 2, ',', '.');

					$porcentajeNO = ($totalno * 100)/$total;
					$porcentajeNOFix = number_format($porcentajeNO, 2, ',', '.');
					?>
					<tr>						
						<td><?php echo $porcentajeSIFix ?>%</td>
						<td><?php echo $porcentajeNOFix ?>%</td>
					</tr>				
				</table><br>
			</div>
			


		<footer class="pie contenedor">
			<p> Página diseñada por <a href="mailto:fatb86@outlook.com">Fabián Toro</a> y <a href="mailto:jessy.696@gmail.com">Jessica Parra</a></p>
		</footer>  
</body>
</html>