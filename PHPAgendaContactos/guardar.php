<?php
 require 'conexion.php';
 $id = $_POST['id'];
 $nombre  = $_POST['nombre'];
 $apellido  = $_POST['apellidos'];
 $telefono = $_POST['telefono'];
 $email = $_POST['email'];
 $comentario = $_POST['comentario'];

$insertar = "INSERT INTO contactoagenda VALUES ('$id','$nombre','$apellido','$telefono','$email','$comentario')";
$sqlinsert = "INSERT INTO contactoagenda (nombre, apellidos, telefono, email, comentario) VALUES ('$nombre', '$apellido', '$telefono', '$email', '$comentario');";

$queryinsert = mysqli_query($conexion, $sqlinsert);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Edita un contacto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <?php require_once 'menu.php';?>
        </div>
        <h1>Usuario creado</h1>
        <?php
            echo 'nombre: '.$nombre;
            echo ' y apellido: '.$apellido;
        ?>
    </body>
</html>