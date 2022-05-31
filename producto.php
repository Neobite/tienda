<?php

   $id = $_GET['id'];
   $id = filter_var($id, FILTER_VALIDATE_INT);

   if (!$id) {
      header('Location /');
   }

   $titulo_pagina = 'Producto - Playeras Perronas';
   include('includes/header.php');
   include('includes/conexion.php');

   try {
      $sql = "SELECT * FROM playera WHERE id_playera=${id}";
      $resultado = $conexion->query($sql);
      $unaPlayera = $resultado->FETCH_ASSOC();

   } catch (Exception $e) {
      echo $e->getMessage(); 
   }
?>
   <!-- Contenido principal -->
   <!-- Inicio del While -->
   <main class="contenedor">
      <h1><?php echo $unaPlayera['nombre'];?></h1>
      <!-- Sección camisa -->
      <div class="camisa">
         <img src="img/<?php echo $unaPlayera['imagen']; ?>" alt="<?php echo $unaPlayera['nombre']; ?>">
         <div>
            <p><?php echo $unaPlayera['descripcion']; ?></p>

            <div class="camisa__info">
               <div>
                  <p class="camisa__info--titulos">Precio</p>
                  <p class="camisa__info--precio"><?php echo $unaPlayera['precio']; ?></p>
               </div>
               <div>
                  <p class="camisa__info--titulos">Existencias</p>
                  <p class="camisa__info--precio"><?php echo $unaPlayera['existencia']; ?></p>
               </div>
            </div>

            <p class="camisa__infopedido">Para enviar un pedido selecciona la talla, el número de playeras y tu dirección de correo electrónico. En breve un miembro de nuestro equipo se pondrá en contacto contigo.</p>

            <form class="formulario">
               <select class="formulario__campo">
                  <option disabled selected> - Selecciona una talla - </option>
                  <option>Chica</option>
                  <option>Mediana</option>
                  <option>Grande</option>
               </select>
               <input class="formulario__campo" type="number" placeholder="Cantidad" min="1" required>
               <input class="formulario__campo" type="email" placeholder="Ingresa tu dirección de email" pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" title="Ingresa un correo válido" required>
               <textarea class="formulario__campo" placeholder="Ingresa tu comentario (opcional)"></textarea>
               <input class="formulario__submit" type="submit" value="Enviar pedido">
            </form>

         </div>
         
      </div>
      <!-- Sección camisa -->
    </main>
   
   <!-- Fin del contenido principal -->
   <?php 
      //mysqli_close($conexion);
      include 'includes/footer.php';
   ?>
</body>
</html>