<?php
include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Edita un contacto</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="estilos" href="css/estilo.css">
    </head>
    <body>
        <div class="container">
            <?php require_once 'menu.php'; ?>
        </div>
        <!-- Full screen modal -->
        <div id="overlay" class="overlay">
            <div class="modal-dialog modal-fullscreen-sm-down" id="popup">
                <h1>Usuario creado:</h1>
                <?php
                nuevousuario($id, $nombre, $apellido, $telefono, $email, $comentario);
                ?>
                <br>
                <button type="submit" id="cerrar" class="btn btn-primary">Cerrar</button>

            </div>->
        </div>
        <script>
            var overlay = document.getElementById('overlay'),
                    popup = document.getElementById('popup'),
                    cerrarP = document.getElementById('cerrar');
            function abrirPopup(){
                overlay.classList.add('active');
            };
            
            cerrarP.addEventListener('click',function(){
                overlay.classList.remove('active');
            })
            
        </script>
    </body>
</html>