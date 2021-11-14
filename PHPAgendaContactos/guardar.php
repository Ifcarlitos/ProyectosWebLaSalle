<?php
 require 'conexion.php';
 $id = $_POST['id'];
 $nombre  = $_POST['nombre'];
 $apellido  = $_POST['apellidos'];
 $telefono = $_POST['telefono'];
 $email = $_POST['email'];
 $comentario = $_POST['comentario'];

$insertar = "INSERT INTO contactoagenda VALUES ('$id','$nombre','$apellido','$telefono','$email','$comentario')";

$query = mysqli_query($conexion, $insertar);

if($query){

   echo "<script> alert('correcto');
    location.href = '../index.html';
   </script>";

}else{
    echo "<script> alert('incorrecto');
    location.href = '../index.html';
    </script>";
}

?>