/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */
package Controller;

import Dao.contacto;
import Modal.Contacto;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.Collections;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author crome
 */
public class BusquedaServlet extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {
            /* TODO output your page here. You may use following sample code. */
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Servlet BusquedaServlet</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>Servlet BusquedaServlet at " + request.getContextPath() + "</h1>");
            out.println("</body>");
            out.println("</html>");
        }
    }

    @Override
    protected void doPost(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {
        String busca = req.getParameter("busqueda");
        String select2 = req.getParameter("select");
        
        int select = Integer.parseInt(select2);
        
        ControllerContacto controller = new ControllerContacto();
        Contacto con = new Contacto();
        contacto contact = new contacto();
        List<Contacto> contactos = Collections.emptyList();
        contactos = new ArrayList<>();

        if (select == 1) {
            con.setNombre(busca);
            try {
                contactos = contact.getContactoNombre(busca);
            } catch (SQLException ex) {
                Logger.getLogger(BusquedaServlet.class.getName()).log(Level.SEVERE, null, ex);
            }
        } else if (select == 2) {
            int id = Integer.parseInt(busca);
            con.setTelefono(id);
            try {
                contactos = contact.getContactoTelefono(id);
            } catch (SQLException ex) {
                Logger.getLogger(BusquedaServlet.class.getName()).log(Level.SEVERE, null, ex);
            }
        }

        contact.deletePersona(con);
        response(contactos, resp);

    }

    private void response(List<Contacto> contactos, HttpServletResponse resp) throws IOException {
        ControllerContacto controller = new ControllerContacto();
        String menu = controller.menu();
        String tabla = controller.tabla(contactos);
        resp.setContentType("text/html;charset=UTF-8");
        PrintWriter out = resp.getWriter();
        out.println("<html>\n"
                + "    <head>\n"
                + "        <meta charset=\"UTF-8\">\n"
                + "        <title>Crear un contactode contactos</title>\n"
                + "        <link rel=\"stylesheet\" href=\"css/estilo.css\">\n"
                + "        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">\n"
                + "        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>\n"
                + "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">\n"
                + "    </head>");
        out.println("<body>");
        out.println("<div class=\"container\">\n" + menu + ""
                + "            <div class=\"jumbotron\">\n"
                + "                <h1 class=\"display-4\">Agenda de contactos</h1>\n"
                + "                <p class=\"lead\">Crea un nuevo contacto</p>\n"
                + "                <hr class=\"my-4\">\n"
                + "            </div>\n"
                + "        </div>\n"
                + "        <br>");
        out.println(tabla);
        out.println("</body>");
        out.println("</html>");
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
