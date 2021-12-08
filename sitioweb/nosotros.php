<?php
include("template/cabecera_pagina.php");












?>
<div class="row">
   <div class="col-8">
      <div class="jumbotron">
         <h1 class="display-3 titulito">¿Que es Horrorteca?</h1>
         <p class="lead mt-5 frasecita">Esta página es un pequeño espacio en el que tiene cabida todo 
                         amante de la literatura de terror. Aquí podrás encontrar información  
                         acerca de tus autores preferidos así como un repertorio de libros
                         los cuales podrás disfrutar. Consideramos que la lectura es uno de 
                         los mayores potenciadores que hay para ejercitar nuestro cerebro, por eso, 
                         nuestra pequeña  <strong>mision</strong>  , es ofrecer, dentro de  la legalidad, facilidades
                         para que todas aquellas personas  que disfruten de este género puedan acceder a los 
                         libros desde cualquier parte del mundo y sin ningún tipo de dificultad. Por esta razón 
                         este espacio es libre. 

         </p><hr>
    

   
    </div>
</div>
  <div class="col-4">
          <img src="img/lector.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
      </div>
</div>

<div class="row">
    <div class="col-md-6 col-lg-6 col-sm-12 col-12">
        <h2 class='text-center titulito' >¿Donde estamos?</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194348.13981211506!2d-3.819621146174089!3d40.43786975892655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422997800a3c81%3A0xc436dec1618c2269!2sMadrid!5e0!3m2!1ses!2ses!4v1638918674765!5m2!1ses!2ses"
             width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" class='mt-5'></iframe>
    </div>

    <div class="col-md-6 col-lg-6 col-sm-12 col-12º">
      <h4 class='mt-5 text-center titulito'>Haznos llegar cualquier pregunta o sugerencia</h4>
      <form  method='POST' action='comentarios.php' class='text-center'>
        <label class='frasecita' >Nombre:</label>
        <input type="text" name="nombre" id="" class='mt-4' required><br>
        <label class='frasecita' >Correo electrónico: </label>
        <input type="email" name="correo" id="" class='mt-4' required><br>
        <textarea name="area" id="" cols="30" rows="10" class='mt-4' required></textarea><br>
        <input type="submit" value="¡Envía!" class='mt-4'>
     </form>

    </div>
 

  
</div>



<?php  include("template/pie_pagina.php")?>