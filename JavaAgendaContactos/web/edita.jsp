<%-- 
    Document   : edita
    Created on : 12-dic-2021, 20:20:26
    Author     : crome
--%>

<%@page import="Controller.ControllerContacto"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Edita un contacto</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <% 
                ControllerContacto controller = new ControllerContacto();
                String menu = controller.menu();
                out.print(menu);
            %>
        </div>
            <div class="jumbotron">
                <h1 class="display-4">Agenda de contactos</h1>
                <p class="lead">Editar un contacto por su id</p>
                <hr class="my-4">
            </div>
        </div>
        <br>
        <form action="EditServlet" method="post">
            <div class="mb-3">
                <label class="form-label">ID del contacto a editar:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="id" placeholder="Buscar, es obligatorio" >
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" placeholder=" tu nombre" >
            </div>
            <div class="mb-3">
                <label class="form-label">Apellidos:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="apellido" placeholder="tus apellidos" >
            </div>
            <div class="mb-3">
                <label class="form-label">Telefono:</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="telefono" placeholder="tu telefono" >
            </div>
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="...@..." >
            </div>
            <div class="mb-3">
                <label class="form-label">Comentario:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="coment">
            </div>
            <button type="submit" name="enviar" class="btn btn-primary">Editar</button>
        </form>
        <br><br>
    </body>
</html>