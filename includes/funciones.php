<?php
// Muestra un solo producto
function obtenerUnProducto($propducto_id) {
      include 'includes/conexion.php';

      try {
            $sql = " SELECT * FROM playera WHERE id = $id_playera";
            $res = $conexion->query($sql);

      } catch (Exception $e) {
            echo $e->getMessage();
            return array();
      }
      return $res;

}
?>