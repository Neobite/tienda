<?php
   $titulo_pagina = 'Producto - Playeras Perronas';
   include('includes/header.php');
?>

   <!-- Contenido principal -->
   <main class="contenedor">
      <h1>Playera</h1>
      
      <!-- Sección camisa -->
      <div class="camisa">
         <img src="img/3.jpg" alt="imagen de producto">
         <div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos voluptatem labore pariatur non possimus fuga ea ad beatae ducimus odit cupiditate in, incidunt nulla repudiandae iure officia corrupti laborum distinctio alias expedita maiores quos. Placeat assumenda fugiat esse pariatur dolores commodi dolor quis, iure beatae facilis rerum doloribus ea reiciendis quam minima, officia autem nisi excepturi labore similique in nam voluptas... </p>

            <div class="camisa__info">
               <div>
                  <p class="camisa__info--titulos">Precio</p>
                  <p class="camisa__info--precio">$20.30</p>
               </div>
               <div>
                  <p class="camisa__info--titulos">Existencias</p>
                  <p class="camisa__info--precio">12</p>
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
   include('includes/footer.php');
  ?>

</body>
</html>