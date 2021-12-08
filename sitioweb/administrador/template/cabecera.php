<?php 

session_start();
if(!isset($_SESSION['usuario'])){
  header('Location:../administrador/index_admin.php');
}else{

 if($_SESSION['usuario']=='ok'){
  $nombreUsuario = $_SESSION['nombreUsuario'];
}

}





?>
<!doctype html>
<html lang="en">
  <head>
    <title>Inicio</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


<?php $url= 'http://' . $_SERVER['HTTP_HOST'] . '/sitioweb'  ?>    
  <nav class="navbar navbar-expand navbar-light bg-light">
      <div class="nav navbar-nav">
          <a class="nav-item nav-link active" href="#">Administrador del sitio web</a>
          <a class="nav-item nav-link" href="<?php echo $url ?>/administrador/inicio.php">Inicio</a>
          <a class="nav-item nav-link" href="<?php echo $url ?>/administrador/section/libros.php">Administrador de descargas</a>
          
          <a class="nav-item nav-link" href=" <?php echo $url ?>">Ver sitio Web</a>
          <a class="nav-item nav-link" href="<?php echo $url ?>/administrador/section/cerrar.php">Cerrar sesion</a>
      </div>
  </nav>


  <div class="container">
      <br>
     <div class="row">