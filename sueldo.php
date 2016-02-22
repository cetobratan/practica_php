<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SUELDO</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		$x= $_POST['nombre'];
		$y= $_POST['sueldo'];


$SueTotal=0.000;
if (isset($_POST['comision'])){
	$_comision = $_POST['comision'];
		
		foreach ($_comision as $key => $monto) {
			$SueTotal=$SueTotal+$monto;
			
		}
		
		
}
			echo $y+$SueTotal;

	


	 ?>
	 <br/>

	 <a href="formulario_sueldo.php">Back</a>
</body>
</html>