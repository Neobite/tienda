<?php
include('includes/conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   echo "<pre>";
   var_dump($_POST);
   echo "</pre>";

   $nombre = $_POST['nombre'];
   $apaterno = $_POST['apaterno'];
   $amaterno = $_POST['amaterno'];
   $edad = $_POST['edad'];
   $fnacimiento = $_POST['fnacimiento'];
   $sexo = $_POST['sexo'];
   $curp = $_POST['curp'];
   $telefono = $_POST['telefono'];
   $redes = $_POST['redes'];
   $ssocial = $_POST['ssocial'];

   //Insertar valores en la base de datos.
   $query = "INSERT INTO trabajadores (nombre, apaterno, amaterno, edad, fnacimiento, sexo, curp, telefono, redes, ssocial) VALUES('$nombre', '$apaterno', '$amaterno', '$edad', '$fnacimiento', '$sexo', '$curp', '$telefono', '$redes', '$ssocial')";

   //echo $query;

   $resultado = mysqli_query($conexion, $query);

   if ($resultado) {
      echo "Registro insertado correctamente";
   } 

}

?>
<!DOCTYPE html>
 <html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Mundo IF'S</title>
	  <style>
		label {
			font-family: Arial, Helvetica, sans-serif;
			color: #000;
			font-size: 1.5rem;
			padding: 1rem 0;
			display:block;
		}

		legend {
			font-family: Arial, Helvetica, sans-serif;
			color: #000;
			font-size: 1.5rem;
			padding: 1rem 0;
		}
	  </style>
 </head>
 <body>
 	<main>
		<form action="formulario.php" method="post">
			<fieldset>
				<legend>Añadir trabajador</legend>
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" placeholder="Nombre de trabajador">
	
				<label for="apaterno">Apellido paterno</label>
				<input type="text" name="apaterno" placeholder="Apellido paterno">
	
				<label for="amaterno">Apellido materno</label>
				<input type="text" name="amaterno"placeholder="Apellido materno">
	
				<label for="edad">Edad</label>
				<input type="number" name="edad" placeholder="Edad">
	
				<label for="fnacimiento">Fecha de nacimiento</label>
				<input type="date" name="fnacimiento"placeholder="Fecha de nacimiento">
	
				<label for="sexo">Sexo</label>
				<select name="sexo">
            <option disabled selected> - Selecciona una opción - </option>
					<option value="femenino">Femenino</option>
					<option value="masculino">Masculino</option>
					<option value="otro">Otro</option>
				</select>
	
				<label for="curp">CURP</label>
				<input type="text" name="curp" placeholder="CURP">
	
				<label for="telefono">Telefono</label>
				<input type="number" name="telefono" min="1" placeholder="Número telefónico">
	
				<label for="redes">Redes sociales</label>
				<select name="redes">
            <option disabled selected> - Selecciona una red social - </option>
					<option value="Facebook">Facebook</option>
					<option value="Instagram">Instagram</option>
					<option value="Otra">Otra</option>
				</select>
	
				<label for="ssocial">¿Cuenta con seguro social? </label>
				<select name="ssocial" name="ssocial">
            <option disabled selected> - Selecciona una opción - </option>
					<option value="Si">Si</option>
					<option value="No">No</option>
				</select>
			</fieldset>
			<input type="submit" value="Insertar registro">
		</form>
</body>
</html>