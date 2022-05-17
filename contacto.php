<?php
   $titulo_pagina = 'Contacto - Playeras Perronas';
   include('includes/header.php');
?>

   <!-- Contenido principal -->
   <main class="contenedor">
      <h1>Contáctanos</h1>

      <!-- Sección contacto -->
      <div class="contacto">
         <div>
            <p>¿Tienes alguna duda, comentario, sugerencia para nosotros? Con mucho gusto atendemos todos los mensajes que nos llegan, en breve nos comunicaremos contigo. Gracias por tu comentario.!!</p>

            <!-- Sección PHP para validación de formulario -->
            <?php 
            //Declaración de variables
            $nombre = $_REQUEST['nombre'];
            $email = $_REQUEST['email'];
            $mensaje = $_REQUEST['mensaje'];
            //Validación mínima de los datos, únicamente verifica que los campos del formulario no esten vacios.

                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                  
                        if (!empty ($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje']) ) {
                           echo "<span>Gracias $nombre por tu mensaje, en breve nos pondremos en contacto</span>";
                        }
               }
            ?>
            <!-- Fin sección PHP para validación de formulario -->

            <!-- Formulario de contacto -->
            <form action="contacto.php" method="post">
               <div class="contacto__columnas">
                  <div>
                     <label>Nombre</label>
                     <input type="text" name="nombre" placeholder="Ingresa tu nombre completo" pattern="[a-zA-Z\sáéíóú]{3,50}" title="Ingresa tu nombre completo" required>
                  </div>

                  <div>
                     <label>Correo electrónico</label>
                     <input type="email" name="email" placeholder="Ingresa tu dirección de email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" title="Ingresa un correo válido" required>
                  </div>
               </div>

               <div>
                  <label>Mensaje</label>
                  <textarea name="mensaje" placeholder="Ingresa tu mensaje" rows="12" pattern="[A-Za-z0-9]+" title="Ingresa tu mensaje" required></textarea>
               </div>

               <input class="formulario__submit" type="submit" value="Enviar mensaje">
            </form>
            <!-- Fin del formulario de contacto -->

         </div>
      </div>
      <!-- Sección contacto -->
    </main>
   <!-- Fin del contenido principal -->

   <?php
      include('includes/footer.php');
   ?>

</body>
</html>