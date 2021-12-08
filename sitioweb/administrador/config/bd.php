

<?php 
$bd_host = "localhost";
	$bd_nombre = "horrorteca";
	$bd_usuario = "root";
	$bd_contra = "";

    try{
        $conexion = new PDO("mysql:host=$bd_host; dbname=$bd_nombre",$bd_usuario,$bd_contra);
        

    }catch(Exception $e){
      echo  $e->getMessage();
    }

    ?>

