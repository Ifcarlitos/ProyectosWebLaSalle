<?php
require 'conexion.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Busqueda de contactos</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <?php require_once 'menu.php';?>
        </div>
        <div class="container">
            <?php require_once 'menu.php';?>
            <div class="jumbotron">
                <h1 class="display-4">Agenda de contactos</h1>
                <p class="lead">Buscar un contacto por nombre o por telefono</p>
                <hr class="my-4">
            </div>
        </div>
        <br>
        <form action="" method="get">
            <div class="mb-3">
                <label class="form-label">Nombre/telefono del contacto:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="busqueda" placeholder="Buscar" >
            </div>
            <select class="form-select" aria-label="Default select example" name="select">
                    <option value="1">Nombre</option>
                    <option value="2">Telefono</option>
            </select>
            <br>
            <button type="submit" name="enviar" class="btn btn-primary">Buscar</button>
        </form>
        <br><br>
        
        <?php 
            if(isset($_GET['enviar'])){
                $busqueda = $_GET['busqueda'];
                if($_GET['select'] == 1){
                    $consulta = "SELECT * FROM contactoagenda WHERE nombre LIKE '%$busqueda%'";
                } elseif($_GET['select']== 2){
                   $consulta = "SELECT * FROM contactoagenda WHERE telefono LIKE '%$busqueda%'"; 
                }else{
                    echo 'no hay datos';
                }
            }
        ?>
        <br>
        <table class="table">
            <tr>
                <td scope="col">id</td>
                <td scope="col">nombre</td>
                <td scope="col">apellidos</td>
                <td scope="col">telefono</td>
                <td scope="col">email</td>
                <td scope="col">comentario</td>
            </tr>
            <?php 
               //$sql='SELECT * FROM contactoagenda';
               $datos = mysqli_query($conexion, $consulta);
               while($mostrar = mysqli_fetch_array($datos)){
            ?>
            <tr>
                <td><?php echo $mostrar['id'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['apellidos'] ?></td>
                <td><?php echo $mostrar['telefono'] ?></td>
                <td><?php echo $mostrar['email'] ?></td>
                <td><?php echo $mostrar['comentario'] ?></td>
            </tr>
            <?php 
               }
            ?>
        </table>
    </body>
</html>
