<?php
include 'conexion.php';

$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$p3 = $_POST['p3'];
$p4 = $_POST['p4'];
$p5 = $_POST['p5'];
$p6 = $_POST['p6'];
$p7 = $_POST['p7'];
$p8 = $_POST['p8'];
$p9 = $_POST['p9'];
$p10 = $_POST['p10'];
$p11 = $_POST['p11'];
$p12 = $_POST['p12'];


$ins = $con -> query("INSERT INTO indexacion (pk,pregunta,cumple) VALUES ('','1','$p1')");
$ins = $con -> query("INSERT INTO indexacion (pk,pregunta,cumple) VALUES ('','2','$p2')");
$ins = $con -> query("INSERT INTO indexacion (pk,pregunta,cumple) VALUES ('','3','$p3')");
$ins = $con -> query("INSERT INTO indexacion (pk,pregunta,cumple) VALUES ('','4','$p4')");
$ins = $con -> query("INSERT INTO indexacion (pk,pregunta,cumple) VALUES ('','5','$p5')");
$ins = $con -> query("INSERT INTO indexacion (pk,pregunta,cumple) VALUES ('','6','$p6')");
$ins = $con -> query("INSERT INTO indexacion (pk,pregunta,cumple) VALUES ('','7','$p7')");
$ins = $con -> query("INSERT INTO indexacion (pk,pregunta,cumple) VALUES ('','8','$p8')");
$ins = $con -> query("INSERT INTO indexacion (pk,pregunta,cumple) VALUES ('','9','$p9')");
$ins = $con -> query("INSERT INTO indexacion (pk,pregunta,cumple) VALUES ('','10','$p10')");
$ins = $con -> query("INSERT INTO indexacion (pk,pregunta,cumple) VALUES ('','11','$p11')");
$ins = $con -> query("INSERT INTO indexacion (pk,pregunta,cumple) VALUES ('','12','$p12')");

if ($ins) {	?>
	<script type="text/javascript">
		alert('ENCUESTA GUARDADA EXITOSAMENTE');
	</script>
<?php 
	echo "<script>window.location = '../proyecto/index.php'</script>";
}else{
?>
	<script type="text/javascript">
		alert('HA OCURRIDO UN ERROR');
	</script>
<?php 
	echo "No guardado";
}
?>