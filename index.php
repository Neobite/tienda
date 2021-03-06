<?php
   $titulo_pagina = 'Bienvenido - Playeras Perronas';
   include('includes/header.php');
   include('includes/conexion.php');
?>

   <!-- Contenido principal -->
   <main class="contenedor">
      <h1>Nuestros productos</h1>
      
      <div class="grid">
         
         <?php
            try {
               $sql = "SELECT * FROM playera";
               $resultado = $conexion->query($sql);

            } catch (Exception $e) {
               echo $e->getMessage(); 
            }
         ?>

         <!-- Inicio del While -->
         <?php while ($playera = $resultado->FETCH_ASSOC()) { ?>         
         <div class="producto">
         <a href="producto.php?id=<?php echo $playera['id_playera']; ?>">
               <img src="img/<?php echo $playera['imagen']; ?>" alt="<?php echo $playera['nombre']; ?>">
               <div>
                  <p class="producto__nombre"><?php echo $playera['nombre']; ?></p>
                  <p class="producto__precio"><?php echo $playera['precio']; ?></p>
               </div>
             </a>
         </div>
         <?php } ?>
         <!-- Fin del While -->
 
      </div>

   </main>
   <!-- Fin del contenido principal -->
   <?php
      include('includes/footer.php');
      //Cerrar la conexión a la base de datos, es una buena práctica.
      //mysqli_close($conexion);
   ?>


</body>
</html>