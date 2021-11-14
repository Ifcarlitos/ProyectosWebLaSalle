<!DOCTYPE html>
<?php include 'conexion.php'?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Crear un contactode contactos</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <?php require_once 'menu.php';?>
            <div class="jumbotron">
                <h1 class="display-4">Agenda de contactos</h1>
                <p class="lead">Crea un nuevo contacto</p>
                <hr class="my-4">
            </div>
        </div>
        <br>
        <form  method="POST" name="form-work" action="logica/guardar.php">
            <div id="wrapper" class="container">
                 <center>   
                    <h1>Insertar un nuevo contacto</h1><hr>
                        <form  method="POST" name="form-work" action="logica/guardar.php">
                            <fieldset>
                                  <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label" for="id">Id</label>
                                      <input name="id" class="form-control" placeholder="id-No poner nada" type="number">
                                      </div>
                                    </div>
                          
                                  <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="nombre">Nombre</label>
                                        <input name="nombre" class="form-control" placeholder="Tu nombre" type="text">
                                      </div>
                                    </div>
                          
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="apellidos">Apellidos</label>
                                        <input name="apellidos" class="form-control" placeholder="apellidos" type="text">
                                      </div>
                                    </div>
                          
                                   <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="telefono">Telefono</label>
                                        <input name="telefono" class="form-control" placeholder="telefono" type="number">
                                      </div>
                                    </div>
                
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="email">Email</label>
                                        <input name="email" class="form-control" placeholder="...@..." type="text">
                                      </div>
                                    </div>
                                    
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <label class="control-label" for="email">comentario</label>
                                        <input name="comentario" class="form-control" placeholder="comenta" type="text">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block info">Guardar</button>
                                      </div>
                                    </div> 
                                </fieldset> 
        
                        </form>
                 </center>
              </div>
        </form>
    </body>
</html>
