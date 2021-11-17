<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba POST</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <li class="nav-link active">
          <a class="nav-link" href="get.php">Ir a GET</a>
        </li>
        <li class="nav-link active">
          <a class="nav-link" href="index.php">Ir a POST</a>
        </li>
        <br>
        <?php
        if (isset($_POST['enviar'])) {
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            if($n1 == ''){$n1=0;};
            if($n2 == ''){$n2=0;};
            if ($n1 <> 0 or $n2 <> 0) {
                $ntotal = $n1 + $n2;
                echo '<div class="alert alert-primary" role="alert">';
                echo '<p> la suma es: ';
                echo $ntotal;
                echo '</div>';
            }
        }
        ?>
        <br>
        <form  method="POST" name="form-work" action="">
            <div id="wrapper" class="container">
                <center>   
                    <h1>Prueba de POST, suma de numeros</h1><hr>
                    <form  method="POST" name="form-work" action="">
                        <fieldset>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="control-label" for="n1">n1:</label>
                                    <input name="n1" class="form-control" placeholder="numero 1" type="number">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="control-label" for="n2">n2:</label>
                                    <input name="n2" class="form-control" placeholder="numero 2" type="number">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" name="enviar" class="btn btn-primary btn-lg btn-block info">Enviar</button>
                                </div>
                            </div> 
                        </fieldset> 
                    </form>
                </center>
            </div>
        </form>
    </body>
</html>