<?php
include('administrador/config/bd.php');
$nombre =$_POST['nombre'];
$correo = $_POST['correo'];
$area = $_POST['area'];


$sql = $conexion->prepare("INSERT INTO comentarios(NOMBRE,EMAIL,COMENTARIO) VALUES(:nombre, :email, :comentario);");
$sql->bindParam(':nombre',$nombre);
$sql->bindParam(':email',$correo);
$sql->bindParam(':comentario',$area);
$sql->execute();

header('Location:nosotros.php');








?>