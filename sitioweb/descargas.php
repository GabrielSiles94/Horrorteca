
<?php include('template/cabecera_pagina.php');?>
<style>
   body{background-image: url(img/fondo3.jpg);
background-size:100%;
   }
</style>
 

	

<?php include('administrador/config/bd.php');
 
 
 $sql2 =$conexion->prepare("SELECT * FROM descargas ");
    
 $sql2->execute();
 $listaLibros = $sql2->fetchAll(PDO::FETCH_ASSOC);
 
 ?>





	<div class="row mt-5">
		<div class="col-12">
			<h1 class='text-center titulito '>TITULOS DISPONIBLES</h1>
		</div>
	</div><hr><hr>
	
	





	<?php foreach($listaLibros as $libro){ ?>

	<div class="col-md-4 col-lg-3 col-sm-6 col-6  mt-5 ">
		<div class="card descarga">
			<img class="card-img-top img-fluid img-thumbnail " src="./img/<?php echo $libro['IMAGEN']; ?>" alt="" ' height='300px; '>
            <div class="card-body">
            <h4 class="card-title nombre"> <span class='nombre_principal'>Título:</span>  <?php echo $libro['NOMBRE']; ?></h4>
            <h4 class="card-title nombre"><span class='nombre_principal'>Autor:</span> <?php echo $libro['AUTOR']; ?> </h4>
            <a href=" <?php echo 'upload/' . $libro['ARCHIVO']; ?>" target='_BLANK'>
            <button value='descargar ' class='bg-white'  style=" color:black; font-family:'Nanum Gothic Coding'"> <span class='descarga'>descargar</span></button></a>
        </div>

    </div>
</div>

   
   


     <?php } ?>

	 <?php include('template/pie_pagina.php');?>
   


