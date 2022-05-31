<?php
// Declaración de variables 
$host = "localhost";
$base = "tienda";
$user = "root";
$pass = "moonspell";

try {
      $conexion=new PDO("mysql:host=$host;dbname=$base",$user, $pass);
      if ($conexion) {
      //   echo "Conexión exitosa a la base de datos";
      }

} catch (Exception $ex) {
   echo $ex->getMessage();
}

?>