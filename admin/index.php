<?php
   $titulo_pagina = 'Bienvenido - Playeras Perronas';
   include('../includes/header.php');
   include('../includes/conexion.php');
?>

   <!-- Contenido principal -->
   <main class="contenedor">
      
   <h1>Administrador de playeras</h1>
      
   </main>
   <!-- Fin del contenido principal -->
   <?php
      include('../includes/footer.php');
      //Cerrar la conexión a la base de datos, es una buena práctica.
      //mysqli_close($conexion);
   ?>


</body>
</html>