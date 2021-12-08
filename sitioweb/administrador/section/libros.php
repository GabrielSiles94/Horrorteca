

<?php include('../template/cabecera.php'); ?>

<?php 
$id =(isset($_POST["textId"]))?$_POST["textId"]:"";
$nombre =(isset($_POST["textNombre"]))?$_POST["textNombre"]:"";
$autor =(isset($_POST["seleccion"]))?$_POST["seleccion"]:"";
$imagen =(isset($_FILES["imagen"]['name']))?$_FILES["imagen"]['name']:"";
$accion =(isset($_POST["accion"]))?$_POST["accion"]:"";
$archivo =(isset($_POST["archivo"]))?$_POST["archivo"]:"";

include('../config/bd.php');

switch ($accion) {
    case 'agregar':

        $nombre_descarga = $_FILES['archivo']['name'];
        $ruta='../../upload/';
        $upload= $ruta . $nombre_descarga; 
         move_uploaded_file($_FILES['archivo']['tmp_name'], $upload);
         

        $sql = $conexion->prepare("INSERT INTO descargas (NOMBRE,IMAGEN,AUTOR,ARCHIVO) VALUES(:nombre, :imagen, :autor,:archivo);");
        $sql->bindParam(':nombre',$nombre);
        $sql->bindParam(':imagen',$imagen);
        $sql->bindParam(':autor',$autor);
        $sql->bindParam(':archivo',$nombre_descarga);

        $fecha = new DateTime();
        $nombreArchivo = ($imagen !='')?$fecha->getTimestamp().'_' . $_FILES['imagen']['name']:'imagen.jpg';// incluye el nombre y la fecha si no hay  nombre se le pondra imagen.jpg que sera generica
        $tmpImagen = $_FILES['imagen']['tmp_name'];
        if($tmpImagen !=''){
            move_uploaded_file($tmpImagen,'../../img/' . $nombreArchivo);
        }
        $sql->bindParam(':imagen',$nombreArchivo);
        $sql->execute();

         
      
  


        
        header('Location:libros.php');
        break;


    case 'modificar':
        $sql = $conexion->prepare("UPDATE descargas set NOMBRE =:nombre, AUTOR=:autor  WHERE ID = :id");
        $sql->bindParam(':id',$id);
        $sql->bindParam(':nombre',$nombre);
        $sql->bindParam(':autor',$autor);
       
        $sql->execute();

         if($imagen != ""){
            $fecha = new DateTime();
            $nombreArchivo = ($imagen !='')?$fecha->getTimestamp().'_' . $_FILES['imagen']['name']:'imagen.jpg';// incluye el nombre y la fecha si no hay  nombre se le pondra imagen.jpg que sera generica
            $tmpImagen = $_FILES['imagen']['tmp_name'];
            move_uploaded_file($tmpImagen,'../../img/' . $nombreArchivo);
            $sql = $conexion->prepare("SELECT IMAGEN FROM descargas WHERE ID = :id");
        $sql->bindParam(':id',$id);
       
        $sql->execute();

        $libro = $sql->fetch(PDO::FETCH_LAZY);

        if(isset($libro['IMAGEN']) && ($libro['IMAGEN']!='imagen.jpg')){
            if(file_exists('../../img/' . $libro['IMAGEN'])){
                unlink('../../img/' . $libro['IMAGEN']);
            }
        }

      
    

       $sql = $conexion->prepare("UPDATE descargas set IMAGEN =:imagen  WHERE ID = :id");
        $sql->bindParam(':id',$id);
        $sql->bindParam(':imagen',$nombreArchivo);
       
        $sql->execute();
         }



         $nombre_descarga = $_FILES['archivo']['name'];
         $ruta='../../upload/';
         $upload= $ruta . $nombre_descarga; 
   
   
       move_uploaded_file($_FILES['archivo']['tmp_name'], $upload);
       $sql = $conexion->prepare("SELECT ARCHIVO FROM descargas WHERE ID = :id");
       $sql->bindParam(':id',$id);
      
       $sql->execute();

       $libro = $sql->fetch(PDO::FETCH_LAZY);

        if(isset($libro['ARCHIVO']) ){
            if(file_exists('../../upload/' . $libro['ARCHIVO'])){
                unlink('../../upload/' . $libro['ARCHIVO']);
            }
        }

        $sql = $conexion->prepare("UPDATE descargas set ARCHIVO =:archivo  WHERE ID = :id");
        $sql->bindParam(':id',$id);
        $sql->bindParam(':archivo',$nombre_descarga);
       
        $sql->execute();






         header('Location:libros.php');
           
            break;

         case 'cancelar':
          
                header('Location:libros.php');
                break;


                   
                
     case 'seleccionar':
        $sql = $conexion->prepare("SELECT * FROM descargas WHERE ID = :id");
        $sql->bindParam(':id',$id);
       
        $sql->execute();

        $libro = $sql->fetch(PDO::FETCH_LAZY);
        $nombre = $libro['NOMBRE'];
        $imagen = $libro['IMAGEN'];
        $autor = $libro['AUTOR'];
        $archivo = $libro['ARCHIVO'];
       
                   
             break;


    case 'borrar':
            
        $sql = $conexion->prepare("SELECT IMAGEN FROM descargas WHERE ID = :id");
        $sql->bindParam(':id',$id);
       
        $sql->execute();

        $libro = $sql->fetch(PDO::FETCH_LAZY);

        if(isset($libro['IMAGEN']) && ($libro['IMAGEN']!='imagen.jpg')){
            if(file_exists('../../img/' . $libro['IMAGEN'])){
                unlink('../../img/' . $libro['IMAGEN']);
            }
        }
        

            $sql = $conexion->prepare("DELETE FROM descargas WHERE ID = :id");
              $sql->bindParam(':id',$id);
             
              $sql->execute();                  
                
              header('Location:libros.php');
               
                break;

    
}
    




    $sql2 =$conexion->prepare("SELECT * FROM descargas ");
    
    $sql2->execute();
    $listaLibros = $sql2->fetchAll(PDO::FETCH_ASSOC);
    






?>

<div class="col-md-5 col-lg-5 col-sm-12">

	<div class="card">
		<div class="card-header">
			Datos descargas de libros
		</div>

		<div class="card-body">
			<form method="POST" enctype='multipart/form-data'>
				<div class="form-group">
					<label>ID</label>
					<input type="text" required readonly id="textId" name="textId" value="<?php echo $id?>" placeholder="ID">

				</div>

				<div class="form-group">
					<label>Titulo:</label>
					<input type="text" required id="textNombre" name="textNombre" value="<?php echo $nombre?>" placeholder="Nombre">

				</div>
				<label>autor:</label>
				<input type="text" name="seleccion" id="" value="<?php echo $autor?>">


				<div class="form-group  ">
					<label>Imagen:</label><br>


					<?php if($imagen !=''){?>
					<img src="../../img/<?php echo $imagen; ?>" alt="" width='80px' srcset="" class='img-thumbnail'>
					<?php } ?>
					<input type="file" id="imagen" value="" name="imagen">

				</div>

				<label>Archivo: <a href=" <?php echo '../../upload/' .$archivo; ?>" target='_blank'><?php echo $archivo?> </a> </label><br>
				<input type="file" id="imagen" value="" name="archivo" required>




				<div class="btn-group" role="group" aria-label="">
					<button type="submit" class="btn btn-success" value="agregar" name="accion" <?php echo ($accion=='seleccionar' )? 'disabled': ''; ?>>Agregar</button>
					<button type="submit" class="btn btn-warning " value="modificar" name="accion" <?php echo ($accion!='seleccionar' )? 'disabled': '';?>>Modificar</button>
					<button type="submit" class="btn btn-info" value="cancelar" name="accion" <?php echo ($accion!='seleccionar' )? 'disabled': '';?>  >Cancelar</button>

				</div>
			</form>
		</div>



	</div>



</div>










<div class="col-md-7 col-lg-7 col-sm-12">

	<table class="table border">
		<thead>

			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>autor</th>

				<th>Imagen</th>
				<th>Link </th>
				<th>Acciones</th>

			</tr>
		</thead>
		<tbody>
			<?php  
       
        foreach($listaLibros as $libros){    ?>
			<tr>
				<td>
					<?php echo $libros['ID']; ?>
				</td>
				<td>
					<?php echo $libros['NOMBRE']; ?>
				</td>
				<td>
					<?php echo $libros['AUTOR']; ?>
				</td>
				<td><img src="../../img/<?php echo $libros['IMAGEN']; ?>" alt="" width='80px' srcset=""></td>
				<td>
					<?php echo $libros['ARCHIVO']; ?>
				</td>


				<td>

					<form method="post">

						<input type="hidden" name="textId" id="textId" value="<?php echo $libros['ID']; ?>" />

						<input type="submit" name='accion' value="borrar" class='btn btn-danger' />
						<input type="submit" name='accion' value="seleccionar" class='btn btn-primary' />
					</form>

				</td>


			</tr>
			<?php }?>

		</tbody>
	</table>
</div>

<?php include('../template/pie_pagina.php'); ?>



