<?php
// Definición de constantes de conexión
   define('HOST', 'localhost');
   define('USER', 'root');
   define('PASSWORD', 'moonspell');
   define('BASE','tienda');
   
      $conexion = mysqli_connect(HOST, USER, PASSWORD, BASE);
      if (!$conexion) {
      echo "Error en la conexión a la base de datos";
      } else {
      //  echo "Conexión exitosa a la base de datos";
    } 

?>