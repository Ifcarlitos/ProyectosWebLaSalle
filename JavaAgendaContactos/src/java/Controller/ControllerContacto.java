/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Controller;

import Modal.Contacto;
import static java.lang.System.out;
import java.sql.Array;
import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

/**
 *
 * @author crome
 */
public class ControllerContacto {

    List<Contacto> contactos = Collections.emptyList();
    
    public String menu(){
        String menu;
        menu = "</nav>" +
                "<nav class='navbar navbar-expand-lg navbar-light bg-light'>\n" +
                "  <div class='container-fluid'>\n" +
                "    <a class='navbar-brand' href='#'>Agenda</a>\n" +
                "    <div class='collapse navbar-collapse' id='navbarSupportedContent'>\n" +
                "      <ul class='navbar-nav me-auto mb-2 mb-lg-0'>\n" +
                "        <li class='nav-link active'>\n" +
                "          <a class='nav-link' href='index.jsp'>Inicio</a>\n" +
                "        </li>\n" +
                "        <li class='nav-link active'>\n" +
                "          <a class='nav-link' href='busqueda.jsp'>Busqueda</a>\n" +
                "        </li>\n" +
                "        <li class='nav-link active'>\n" +
                "          <a class='nav-link' href='crea.jsp'>Crear</a>\n" +
                "        </li>\n" +
                "        <li class='nav-link active'>\n" +
                "          <a class='nav-link' href='edita.jsp'>Editar</a>\n" +
                "        </li>\n" +
                "        <li class='nav-link active'>\n" +
                "          <a class='nav-link' href='elimina.jsp'>Eliminar</a>\n" +
                "        </li>\n" +
                "      </ul>\n" +
                "    </div>\n" +
                "  </div>\n";
        
        return menu;
    }

    public String tabla(List<Contacto> contactos) {
        Contacto contactoIMP;
        String tabla;
        tabla = "<table class='table'><br><table class='table'><tr><td scope='col'>id</td><td scope='col'>nombre</td><td scope='col'>apellidos</td><td scope='col'>telefono</td><td scope='col'>email</td><td scope='col'>comentario</td></tr>";
        contactoIMP = new Contacto();

        for (int x = 0; x < contactos.size(); x++) {
            tabla += "<tr>";
            tabla += "<td>";
            tabla += String.valueOf(contactos.get(x).getId());
            tabla += "</td>";
            tabla += "<td>";
            tabla += contactos.get(x).getNombre();
            tabla += "</td>";
            tabla += "<td>";
            tabla += contactos.get(x).getApellidos();
            tabla += "</td>";
             tabla += "<td>";
            tabla += String.valueOf(contactos.get(x).getTelefono());
            tabla += "</td>";
            tabla += "<td>";
            tabla += contactos.get(x).getEmail();
            tabla += "</td>";
            tabla += "<td>";
            tabla += contactos.get(x).getComentario();
            tabla += "</td>";
            tabla += "</tr>";
        }
        tabla +="</table>";

        return tabla;
    }
}
