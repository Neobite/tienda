<?php
   $titulo_pagina = 'Nosotros - Playeras Perronas';
   include('includes/header.php');
?>

   <!-- Contenido principal -->
   <main class="contenedor">
      <h1>Nosotros</h1>
      <div class="nosotros">
        <div>
          <p>Mauris mattis nisi tempor, efficitur nisi quis, auctor nibh. Vivamus posuere turpis eu quam commodo pharetra. Nulla ac nibh dignissim, blandit erat et, porttitor elit. Mauris turpis nulla, egestas vitae posuere a, rhoncus sed lorem. Ut id hendrerit ante, nec volutpat urna. Nullam et condimentum leo.</p>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab odio inventore minus minima. Delectus alias, voluptates itaque obcaecati iste pariatur. Ut molestie ante non libero tempor tristique. Nulla rhoncus justo sed lacus mollis, quis maximus augue lobortis. Integer ultricies arcu ut efficitur dapibus. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab odio inventore minus minima. Delectus alias, voluptates itaque obcaecati iste pariatur. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab odio inventore minus minima. Delectus alias, voluptates itaque obcaecati iste pariatur.</p>
        </div>
        <img class="nosotros__imagen" src="img/nosotros.jpg" alt="Imagen nosotros">
      </div>
    </main>
   <!-- Fin del contenido principal -->

   <!-- Por qué comprar -->
   <section class="contenedor">
      <h2>¿Por qué comprar con nosotros?</h2>
         <div class="bloques">
            <div class="bloque">
               <img src="img/icono_1.png" alt="¿Por qué comprar?">
               <h3 class="bloque__titulo">EL mejor precio</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
      
            <div class="bloque">
               <img src="img/icono_2.png" alt="¿Para Devs">
               <h3 class="bloque__titulo">Para Devs</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
      
            <div class="bloque">
               <img src="img/icono_3.png" alt="Envío gratis?">
               <h3 class="bloque__titulo">Envío gratis</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            
            <div class="bloque">
               <img src="img/icono_4.png" alt="La mejor calidad">
               <h3 class="bloque__titulo">La mejor calidad</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
         </div>
    </section>
    <!-- Fin de por qué comprar -->

   <?php
      include('includes/footer.php');
   ?>

</body>
</html>