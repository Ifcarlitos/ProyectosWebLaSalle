<%-- 
    Document   : index
    Created on : 12-dic-2021, 15:45:01
    Author     : crome
--%>

<%@page import="java.util.List"%>
<%@page import="java.util.Collections"%>
<%@page import="java.util.Collections"%>
<%@page import="java.sql.Array"%>
<%@page import="java.util.ArrayList"%>
<%@page import="Modal.Contacto"%>
<%@page import="Dao.contacto"%>
<%@page import="Controller.ControllerContacto"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda de contactos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <% 
                ControllerContacto controller = new ControllerContacto();
                String menu = controller.menu();
                out.print(menu);
            %>
            <div class="jumbotron">
                <h1 class="display-4">Agenda de contactos</h1>
                <p class="lead" id ='pepe'>Agenda realizada para la actividad 8 de proyectos web, creada por Jaume, Josep y Carlos</p>
                <hr class="my-4">
            </div>
        </div>
        <br>
        <%
            contacto selectAll = new contacto();
            List<Contacto> contactos = Collections.emptyList();
            contactos = new ArrayList<>();
            contactos = selectAll.getContactos();

            String tabla = controller.tabla(contactos);
            out.println(tabla);
        %>
    </body>
</html>