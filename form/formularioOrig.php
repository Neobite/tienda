<?php
	include('../includes/conexion.php');

	// Arreglo para mostrar mensajes de error
	$errores = [];

	$nombre = '';
	$apaterno = '';
	$amaterno = '';
	$descripcion = '';
	$edad = '';
	$fnacimiento = '';
	$sexo = '';
	$curp = '';
	$telefono = '';
	$redes = '';
	$ssocial = '';

	// Ejecutar código después de que el usuario haya enviado el formulario
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// echo "<pre>";
		// var_dump($_POST);
		// echo "</pre>";

		$nombre = $_POST['nombre'];
		$apaterno = $_POST['apaterno'];
		$amaterno = $_POST['amaterno'];
		$descripcion = $_POST['descripcion'];
		$edad = $_POST['edad'];
		$fnacimiento = $_POST['fnacimiento'];
		$sexo = $_POST['sexo'];
		$curp = $_POST['curp'];
		$telefono = $_POST['telefono'];
		$redes = $_POST['redes'];
		$ssocial = $_POST['ssocial'];
		$creado = date('Y/m/d');

		if (!$nombre) {
			$errores[] = "Nombre del trabajador";
		}

		if (!$apaterno) {
			$errores[] = "Apellido paterno del trabajador";
		}

		if (!$amaterno) {
			$errores[] = "Apellido materno del trabajador";
		}

		if (strlen($descripcion) < 50) {
			$errores[] = "La descripción debe tener al menos 50 caracteres";
		}

		if (!$edad) {
			$errores[] = "Edad del trabajador";
		}

		if (!$fnacimiento) {
			$errores[] = "Fecha de nacimiento del trabajador";
		}

		if (!$sexo) {
			$errores[] = "Especifique el sexo del trabajador";
		}

		if (!$curp) {
			$errores[] = "La CURP del trabajador";
		}

		if (!$telefono) {
			$errores[] = "El número de teléfono del trabajador";
		}

		if (!$redes) {
			$errores[] = "Seleccione una red social";
		}

		if (!$ssocial) {
			$errores[] = "Seleccione una opción para el Seguro Social";
		}

		// echo "<pre>";
		// var_dump($errores);
		// echo "</pre>";
		// exit;

		//Verificar que el arreglo de errores este vacio, antes de guardar información en la base de datos
		if(empty($errores)) {
				//Insertar valores del formulario en la base de datos.
				$query = "INSERT INTO trabajadores (nombre, apaterno, amaterno, descripcion, edad, fnacimiento, sexo, curp, telefono, redes, ssocial, creado) VALUES('$nombre', '$apaterno', '$amaterno', '$descripcion', '$edad', '$fnacimiento', '$sexo', '$curp', '$telefono', '$redes', '$ssocial', '$creado')";

				$resultado = mysqli_query($conexion, $query);
				
				//Mensaje enviado al usuario si el resgistro ha sido guardado en la base de datos
				echo '<h1 class="mensaje"> - Registro creado correctamente - </h1>';

		} else {
			
			//Mensaje enviado al usuario si hay errores en el formulario.
			echo '<h1 class="mensaje"> - Proporcione los siguientes datos - </h1>';
			
			foreach ($errores as $error) {
				echo "<div class='error'>";
				echo $error;
				echo "</div>";
			}
		}

}

?>
<!DOCTYPE html>
 <html lang="es">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="/tienda/form/form.css">
     <title>Registro de trabajadores</title>
 </head>
 <body>
 	<main>
		<form action="formulario.php" method="post">
			<fieldset>
				<legend>Añadir trabajador</legend>

				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" placeholder="Nombre de trabajador" value="<?php echo $nombre;?>">
	
				<label for="apaterno">Apellido paterno</label>
				<input type="text" name="apaterno" placeholder="Apellido paterno" value="<?php echo $apaterno;?>">
	
				<label for="amaterno">Apellido materno</label>
				<input type="text" name="amaterno"placeholder="Apellido materno" value="<?php echo $amaterno;?>">

				<label for="descripcion">Descripción</label>
				<textarea name="descripcion" cols="60" rows="10"><?php echo $descripcion;?></textarea>
	
				<label for="edad">Edad</label>
				<input type="number" name="edad" placeholder="Edad" value="<?php echo $edad;?>">
	
				<label for="fnacimiento">Fecha de nacimiento</label>
				<input type="date" name="fnacimiento" value="<?php echo $fnacimiento;?>">
	
				<label for="sexo">Sexo</label>
				<select name="sexo">
            <option disabled selected> - Selecciona una opción - </option>
					<option value="Femenino" <?php if (isset($_POST['sexo']) && ($_POST['sexo'] == 'Femenino')) echo 'selected="selected"';?> >Femenino</option>
					<option value="Masculino" <?php if (isset($_POST['sexo']) && ($_POST['sexo'] == 'Masculino')) echo 'selected="selected"';?>>Masculino</option>
					<option value="Binario" <?php if (isset($_POST['sexo']) && ($_POST['sexo'] == 'Binario')) echo 'selected="selected"';?>>Binario</option>
				</select>
	
				<label for="curp">CURP</label>
				<input type="text" name="curp" placeholder="CURP" value="<?php echo $curp;?>">
	
				<label for="telefono">Telefono</label>
				<input type="number" name="telefono" min="1" placeholder="Número telefónico" value="<?php echo $telefono;?>">
	
				<label for="redes">Redes sociales</label>
				<select name="redes">
            	<option disabled selected> - Selecciona una red social - </option>
					<option value="Facebook" <?php if (isset($_POST['redes']) && ($_POST['redes'] =='Facebook')) echo 'selected="selected"';?>>Facebook</option>
					<option value="Instagram"<?php if (isset($_POST['redes']) && ($_POST['redes'] == 'Instagram')) echo 'selected="selected"';?>>Instagram</option>
					<option value="Otra" <?php if(isset($_POST['redes']) && ($_POST['redes'] == 'Otra')) echo 'selected="selected"';?>>Otra</option>
				</select>
	
				<label for="ssocial">¿Cuenta con seguro social?</label>
				<select name="ssocial" name="ssocial">
            <option disabled selected> - Selecciona una opción - </option>
					<option value="Si" <?php if(isset($_POST['ssocial']) && ($_POST['ssocial'] == 'Si')) echo 'selected="selected"';?> >Si</option>
					<option value="No" <?php if(isset($_POST['ssocial']) && ($_POST['ssocial'] == 'No')) echo 'selected="selected"';?> >No</option>
				</select>
			</fieldset>
			<input type="submit" value="Insertar registro">
		</form>
</body>
</html>