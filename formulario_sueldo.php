<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FORMULARIO SUELDO</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="contenedor">
	<form action="sueldo.php" method="POST">
		
			<p>
				<label for="">Nombre</label>
				<input type="text" name="nombre"><br/><br/>

				<label for="">Sueldo</label>
				<input type="text" name=" sueldo"><br/><br/>


				<p>
        			<label>Comision</label><br/> 
        		
        			<input type="checkbox" name="comision[]"value="50"> Llega Temprano S/50 <br>
        			<input type="checkbox"  name="comision[]"value="550"> Vendedor A1 S/ 550 <br>
        			<input type="checkbox"  name="comision[]"value="120"> Bono Familiar S/ 120 <br>
        			<input type="checkbox"  name="comision[]"value="400"> Bono Navideño S/ 400 <br> 

        			
        		</p>

			</p>
			<p>
				<button>Calcular</button>	
			</p>
	</form>
	</div>
</body>
</html>