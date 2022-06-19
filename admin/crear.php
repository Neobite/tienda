<?php
   $titulo_pagina = 'Bienvenido - Playeras Perronas';
   include('../includes/header.php');
   include('../includes/conexion.php');
?>

   <!-- Contenido principal -->
   <main class="contenedor">
      
   <h1>Crear nueva playera</h1>
   <a href="../admin/index.php" class="formulario__submit">Volver</a>

   <form action="" class="contacto">
      <fieldset>
         <legend>Información de la playera</legend>
         <label for="nombre">Nombre</label>
         <input type="text" id="nombre" placeholder="Nombre de la playera">

         <label for="descripcion">Descripción</label>
         <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>

         <label for="imagen">Imagen</label>
         <input type="file" id="imagen" accepted="image/jpeg, image/png">

         <label for="precio">Precio</label>
         <input type="number" id="precio" placeholder="Precio de la playera" min="100">

         <label for="existencia">Existencias</label>
         <input type="number" id="existencia" placeholder="Existencia de la playera" min="1">
      </fieldset>
      <input class="formulario__submit" type="submit" value="Crear nueva playera">
   </form>
      
   </main>
   <!-- Fin del contenido principal -->
   <?php
      include('../includes/footer.php');
   ?>

</body>
</html>