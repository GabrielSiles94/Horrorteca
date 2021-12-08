

<?php
include("template/cabecera_pagina.php") ?>
	<style>
		body{
		        background-image: url(img/elegante.jpg);
		       
		    }
		   </style>

         
	<div class="col-md-7 mt-5">

		<figure class="figure mt-4">
			<img src="img/stephen_king.jpg" class="figure-img img-fluid rounded" alt="" '>
           
      </figure>

</div>

<div class="col-md-5 mt-5">

 <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3"style="font-family:'Nanum Gothic Coding ';color:#efb810"  >El maestro del terror moderno</h1>
        <p class="lead"'>Ha ganado numerosos premios literarios, incluyendo el Premio Bram Stoker en trece ocasiones, el Premio British Fantasy siete veces, los Premios Locus en cinco oportunidades, el Premio Mundial de Fantasía cuatro veces, el Premio Edgar en dos ocasiones y los premios Hugo y O. Henry en una oportunidad.9​ </p>
			<hr class="my-2">

			<p class="lead">

				<a class="btn btn-primary btn-lg" href="https://es.wikipedia.org/wiki/Stephen_King" role="button" style=" color:black; font-family:'Nanum Gothic Coding';background-color:#efb810;">mas información</a>
				<div class="form-check">

					<input type="checkbox" class=" " name="" id="monster" value="verMonster" onchange="javascript:showContent()" />
					<span class='caja1'> Ver algunos de sus monstruos</span>
					<br>

					<input type="checkbox" class=" " name="" id="cine" value="verCine" onchange="javascript:showContent2()" />
					<span class='caja2'>Ver referencias cinematográficas</span>

				</div>
			</p>
	</div>
	</div>

	</div>





	<br><br>
<div class="monsters " id="aparece" style='display:none; '>
		<div class="col-md-12 mt-5">
			<h1 class='text-center titulito' ">Algunas de sus creaciones mas terroríficas</h1>
        </div>


    <div class="row ">
             <div class="col-md-4 col-sm-12 ">
                 <q class=' frasecita' >  Lo que nos gusta pensar sobre nosotros mismos y
                  lo que realmente somos raramente tienen mucho en común</q> 
             </div>

             <div class="col-md-5 col-sm-6 ">
                <figure class="figure mt-5 ">
                   <img src="img/penny.jpg " class=" grande figure-img img-fluid rounded " alt=" " '>
                      <figcaption class="figure-caption text-center "> 'Todos flotareis aquí abajo con Pennywise'</figcaption>
                 </figure>
             </div>


            <div class="col-md-3 col-sm-6 ">
              <figure class="figure mt-5 ">
                  <img src="img/salems´lot.jpg " class=" grande figure-img img-fluid rounded " alt=" " '>
                    <figcaption class="figure-caption text-center "> 'Todos sufrieron con este vampiro'</figcaption>
              </figure>
            </div>
    </div>



 <div class="container-fluid ">

    <div class="row ">

            <div class="col-md-4 col-sm-6 " >
               <figure class="figure mt-5 ">
                  <img src="img/coche.jpg " class=" grande figure-img img-fluid rounded " alt=" " '>
                     <figcaption class="figure-caption text-center "> '¿Pensabas que un  coche no podria darte pesadillas?'</figcaption>
                </figure>
             </div>


            <div class="col-md-3 col-sm-6 ">
                <figure class="figure mt-5 ">
                   <img src="img/jack.jpg " class=" grande figure-img img-fluid rounded " alt=" " '>
                       <figcaption class="figure-caption text-center "> A veces nuestra locura nos convierte en monstruos</figcaption>
                </figure>
            </div>


            <div class="col-md-5 col-sm-12 ">
                <figure class="figure mt-5 grande ">
                   <img src="img/niebla.webp " class=" grande figure-img img-fluid rounded " alt=" " '>
                       <figcaption class="figure-caption text-center "> ¿Que secretos esconde la dimension de la niebla?</figcaption>
                </figure>
            </div>
    </div>
  </div>
</div>




<div class="videos1 " id="videos1"style='display:none' >
        <div class="col-md-12 mt-5 ">
                <h1 class='text-center titulito'>ALGUNAS ADAPTACIONES DE KING LLEVADAS AL CINE</h1>
                <hr><br><br>
        </div>


    <div class="row ">
          <div class="col-md-6 col-lg-6 col-sm-12 ">
                <iframe width="560 " height="315 " src="https://www.youtube.com/embed/xWqiaVyw-Og " 
                        title="YouTube video player " frameborder="0 " 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture "
                        allowfullscreen></iframe>
          </div>

        
          <div class="col-md-6 col-lg-6 col-sm-12 ">
               <iframe width="560 " height="315 " src="https://www.youtube.com/embed/wI0jg8hGdow " 
                       title="YouTube video player " frameborder="0 "
                       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture "
                       allowfullscreen></iframe>
          </div>
    </div>


     <div class="row ">
           <div class="col-md-6 col-lg-6 col-sm-12 mt-4 ">
                <iframe width="560 " height="315 " src="https://www.youtube.com/embed/_oBZ_zTz0Nw " 
                        title="YouTube video player " frameborder="0 " 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture " 
                        allowfullscreen></iframe>

            </div>


            <div class="col-md-6 col-lg-6 col-sm-12 mt-4 ">
               <iframe width="560 " height="315 " src="https://www.youtube.com/embed/hBtSF4-cnzk " 
                       title="YouTube video player " frameborder="0 "
                       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture " 
                       allowfullscreen></iframe>

            </div>
    </div>
</div>


    
 
    <div class="row mt-5 ">
        <div class="col-md-7 ">
           <div class="jumbotron jumbotron-fluid ">
              <div class="container ">
                 <h1 class="display-3 " style="font-family: 'Nanum Gothic Coding';color:#efb810 "> El creador del terror cósmico</h1>
                 <p class="lead " >Howard Phillips Lovecraft (Providence, Rhode Island; 20 de agosto de 1890-ibid.;
                                   15 de marzo de 1937),1​ más conocido como H. P. Lovecraft, fue un escritor estadounidense, 
                                   autor de relatos y novelas de terror y ciencia ficción. Se le considera un gran innovador 
                                   del cuento de terror, al que aportó una mitología propia —los Mitos de Cthulhu—, desarrollada 
                                   en colaboración con otros autores, actualmente en vigencia.2​3​ Su obra constituye un clásico del
                                   horror cósmico, una línea narrativa que se aparta de las tradicionales historias de terror
                                   sobrenatural —satanismo, fantasmas—, incluyendo elementos de ciencia ficción como
                                   , por ejemplo, razas alienígenas, viajes en el tiempo o existencia de otras dimensiones.4​  </p>
                 <hr >
               </div>
           </div>
        </div>



       <div class="col-md-5 ">
          <figure class="figure mt-4 ">
             <img src="img/lovecraft.jpg " class="figure-img img-fluid rounded " alt=" " '>
               
                </figure>
            
               <a class="btn btn-primary btn-lg " href="https://es.wikipedia.org/wiki/H._P._Lovecraft " 
                  role="button "style=" color:black; font-family: 'Nanum Gothic Coding';background-color:#efb810; ">mas información</a>

                  <div class="form-check">
                     <input type="checkbox" class=" " name="" id="monster2" value="verMonster" onchange="javascript:showContent()" />
                     <span class='caja1'> Ver algunos de sus monstruos</span><br>
                     <input type="checkbox" class=" " name="" id="cine2" value="verCine" onchange="javascript:showContent2()" />
                     <span class='caja2'>Ver referencias cinematográficas</span> 
                 </div>
        </div>
    </div>
   


<div  class="" id="dioses" style='display:none; '  >
       <div class="col-md-12 mt-5 ">
          <h1 class='text-center titulito'>Pesadillas de  Lovecraft</h1><hr><br><br>
       </div>


    <div class="row ">
       <div class="col-md-4 col-sm-12 ">
          <q class=" frasecita ">Sus voces hacen temblar el viento y sus conciencias trepidar la tierra. 
                                 Doblegan bosques enteros y aplastan ciudades, 
                                 pero jamás bosque o ciudad alguna ha visto la mano destructora.</q>
       </div>

       <div class="col-md-4 col-sm-6 ">
          <figure class="figure mt-5 ">
             <img src="img/dagon.webp " class=" grande figure-img img-fluid rounded " alt=" " '>
             <figcaption class="figure-caption text-center "  > 'Dagon'</figcaption>
          </figure>
       </div>

       <div class="col-md-4 col-sm-6 ">
          <figure class="figure mt-5 ">
             <img src="img/diosa.jpeg " class=" grande figure-img img-fluid rounded " alt=" " '>
             <figcaption class="figure-caption text-center "> 'Diosa Nyahortep</figcaption>
          </figure>

       </div>
    </div>


    <div class="row ">
       <div class="col-md-6 col-sm-6 ">
          <figure class="figure mt-5 ">
             <img src="img/insmouth.jpg " class=" grande figure-img img-fluid rounded " alt=" " '>
             <figcaption class="figure-caption text-center "> 'Pueblo maldito de hombres peces'</figcaption>
          </figure>
       </div>

       <div class="col-md-6 col-sm-6 ">
         <figure class="figure mt-5 ">
           <img src="img/cthulhu.jpg " class=" grande figure-img img-fluid rounded " alt=" " '>
           <figcaption class="figure-caption text-center "> 'Cthulhu'</figcaption>
         </figure>
       </div>
    </div>

   
</div>






<div class="videos2" id="videos2"style='display:none; '  >

   <div class="col-md-12 mt-5 ">
      <h1 class='text-center titulito'>ADAPTACIONES DE LOVECRAFT EN EL CINE</h1><hr><br><br>
   </div>

 <div class="row ">
     <div class="col-md-6 col-lg-6 col-sm-12 ">
        <iframe width="560 " height="315 " src="https://www.youtube.com/embed/2IJquSlTrF4 "
                title="YouTube video player " frameborder="0 "
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture "
                allowfullscreen></iframe>
     </div>

     <div class="col-md-6 col-lg-6 col-sm-12 ">
        <iframe width="560 " height="315 " src="https://www.youtube.com/embed/WvfaYFZpmDs "
                title="YouTube video player " frameborder="0 " 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture "
                allowfullscreen></iframe>

     </div>
 </div>

  <div class="row ">
    <div class="col-md-6 col-lg-6 col-sm-12 mt-4 ">
       <iframe width="560 " height="315 " src="https://www.youtube.com/embed/KZg5iigPaHs "
               title="YouTube video player " frameborder="0 "
               allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture " 
              allowfullscreen></iframe>
    </div>

     <div class="col-md-6 col-lg-6 col-sm-12 mt-4 ">
        <iframe width="560 " height="315 " src="https://www.youtube.com/embed/3bWwZ5o-7r0 "
                title="YouTube video player " frameborder="0 "
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture " 
               allowfullscreen></iframe>
     </div>
  </div>
</div>




    








<?php  include("template/pie_pagina.php ")?>




