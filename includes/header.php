<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Estilos y fuentes de google -->
   <link rel="stylesheet" href="css/estilos.css">
   <link rel="stylesheet" href="css/normalize.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
   <title><?php echo $titulo_pagina; ?></title>
</head>
<body>
   <!-- Header -->
   <header class="header">
      <a href="index.php">
         <img src="img/logo.png" alt="Logotipo de Tienda" class="header__logo">
      </a>
   </header>
   <!-- Fin del header -->
   
   <!-- Navegación -->
      <nav class="navegacion">
            <a <?php if (strstr($_SERVER['REQUEST_URI'], 'index.php')) echo "class='navegacion__enlace navegacion__enlace--activo'";
                  else { echo "class='navegacion__enlace'"; }?> href="index.php">Tienda</a>
            <a <?php if (strstr($_SERVER['REQUEST_URI'], 'nosotros.php')) echo "class='navegacion__enlace navegacion__enlace--activo'";
                  else { echo "class='navegacion__enlace'"; }?> href="nosotros.php">Nosotros</a>
            <a <?php if (strstr($_SERVER['REQUEST_URI'], 'contacto.php')) echo "class='navegacion__enlace navegacion__enlace--activo'";
                  else { echo "class='navegacion__enlace'"; }?> href="contacto.php">Contáctanos</a>
      </nav>
   <!-- Fin de la navegación -->

