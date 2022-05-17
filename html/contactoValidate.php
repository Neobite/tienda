<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Estilos y fuentes de google -->
   <link rel="stylesheet" href="css/estilos.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
   <title>Contacto</title>
</head>
<body>
   <!-- Header -->
   <header class="header">
      <a href="index.html">
         <img src="img/logo.png" alt="Logotipo de Tienda" class="header__logo">
      </a>
   </header>
   <!-- Fin del header -->

   <!-- Navegación -->
   <nav class="navegacion">
      <a class="navegacion__enlace" href="index.html">Tienda</a>
      <a class="navegacion__enlace navegacion__enlace--activo" href="nosotros.html">Nosotros</a>
      <a class="navegacion__enlace" href="contacto.html">Contáctanos</a>
   </nav>
   <!-- Fin de la navegación -->

   <!-- Contenido principal -->
   <main class="contenedor">
      <h1>Contáctanos</h1>

      <div class="contacto">
         <div>
            <p>¿Tienes alguna duda, comentario, sugerencia para nosotros? Con mucho gusto atendemos todos los mensajes que nos llegan, en breve nos comunicaremos contigo.!!</p>

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
            
            <div>

            </div>

         </div>
      </div>
         
    </main>
   <!-- Fin del contenido principal -->

   <!-- Footer -->
   <footer class="footer">
      <p class="footer__texto">Front Store - Todos los derechos reservados - 2022 - Julio César Martínez</p>
   </footer>
   <!-- Fin del footer -->

</body>
</html> 



EJEMPLOS DE USO DE PHP_ROUND_HALF_DOWN

   <!-- Navegación -->
   <nav class="navegacion">
            <a <?php if (strstr($_SERVER['REQUEST_URI'], 'index.php')) echo "class='navegacion__enlace navegacion__enlace--activo'";
                  else { echo "class='navegacion__enlace'"; }?> href="index.php">Tienda</a>
            <a <?php if ($titulo_pagina == 'Nosotros - Playeras Perronas') echo "class='navegacion__enlace navegacion__enlace--activo'";
                  else { echo "class='navegacion__enlace'"; }?> href="nosotros.php">Nosotros</a>
            <a <?php if ($titulo_pagina == 'Contacto - Playeras Perronas') echo "class='navegacion__enlace navegacion__enlace--activo'";
                  else { echo "class='navegacion__enlace'"; }?> href="contacto.php">Contáctanos</a>
      </nav>
 
      <nav class="navegacion">
            <a <?php if ($titulo_pagina == 'Bienvenido - Playeras Perronas') echo "class='navegacion__enlace navegacion__enlace--activo'";
                  else { echo "class='navegacion__enlace'"; }?> href="index.php">Tienda</a>
            <a <?php if ($titulo_pagina == 'Nosotros - Playeras Perronas') echo "class='navegacion__enlace navegacion__enlace--activo'";
                  else { echo "class='navegacion__enlace'"; }?> href="nosotros.php">Nosotros</a>
            <a <?php if ($titulo_pagina == 'Contacto - Playeras Perronas') echo "class='navegacion__enlace navegacion__enlace--activo'";
                  else { echo "class='navegacion__enlace'"; }?> href="contacto.php">Contáctanos</a>
      </nav>