/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Dao;

import Modal.Contacto;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

/**
 *
 * @author crome
 */
public class contacto {

    Connection conn;

    public List<Contacto> getContactos() throws SQLException {

        List<Contacto> contactos = Collections.emptyList();
        Conexion conex = new Conexion();
        conn = conex.getConexion();

        String query = "SELECT * FROM contactoagenda";

        try {
            PreparedStatement ps = conn.prepareStatement(query);
            ResultSet rs = ps.executeQuery();
            contactos = new ArrayList<>();

            while (rs.next()) {
                Contacto contacto = new Contacto();
                contacto.setId(rs.getInt("id"));
                contacto.setNombre(rs.getString("nombre"));
                contacto.setApellidos(rs.getString("apellidos"));
                contacto.setTelefono(rs.getInt("telefono"));
                contacto.setEmail(rs.getString("email"));
                contacto.setComentario(rs.getString("comentario"));
                contactos.add(contacto);
            }
            rs.close();
            ps.close();

        } catch (SQLException e) {
            e.printStackTrace();
        }

        return contactos;
    }

    public void saveContacto(Contacto contacto) {
        Connection conn;
        Conexion conex = new Conexion();
        conn = conex.getConexion();

        String query = "INSERT INTO contactoagenda (nombre, apellidos, telefono, email, comentario) VALUES (?,?,?,?,?);";
        try {
            PreparedStatement ps = conn.prepareStatement(query);

            ps.setString(1, contacto.getNombre());
            ps.setString(2, contacto.getApellidos());
            ps.setInt(3, contacto.getTelefono());
            ps.setString(4, contacto.getEmail());
            ps.setString(5, contacto.getComentario());
            ps.executeUpdate();

            ps.close();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public void updateContacto(Contacto contacto) {
        Connection conn;
        Conexion conex = new Conexion();
        conn = conex.getConexion();

//        if (contacto.getNombre() != "" && contacto.getApellidos() != "" && contacto.getEmail() != "" && contacto.getComentario() != "" && contacto.getTelefono() != 0) {
//
//            String query = "UPDATE contactoagenda SET nombre=?,apellidos=?,telefono=?,email=?,comentario=? WHERE id=?";
//            try {
//                PreparedStatement ps = conn.prepareStatement(query);
//                ps.setString(1, contacto.getNombre());
//                ps.setString(2, contacto.getApellidos());
//                ps.setInt(3, contacto.getTelefono());
//                ps.setString(4, contacto.getEmail());
//                ps.setString(5, contacto.getComentario());
//                ps.setInt(6, contacto.getId());
//                ps.executeUpdate();
//                ps.close();
//            } catch (SQLException e) {
//                e.printStackTrace();
//            }
//        } 
        
        if(contacto.getNombre() != ""){
            String query = "UPDATE contactoagenda SET nombre=? WHERE id=?";
            try {
                PreparedStatement ps = conn.prepareStatement(query);
                ps.setString(1, contacto.getNombre());
                ps.setInt(2, contacto.getId());
                ps.executeUpdate();
                ps.close();
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
        
        if(contacto.getApellidos() !=""){
            String query = "UPDATE contactoagenda SET apellidos=? WHERE id=?";
            try {
                PreparedStatement ps = conn.prepareStatement(query);
                ps.setString(1, contacto.getApellidos());
                ps.setInt(2, contacto.getId());
                ps.executeUpdate();
                ps.close();
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
        
        if(contacto.getComentario() != ""){
            String query = "UPDATE contactoagenda SET comentario=? WHERE id=?";
            try {
                PreparedStatement ps = conn.prepareStatement(query);
                ps.setString(1, contacto.getComentario());
                ps.setInt(2, contacto.getId());
                ps.executeUpdate();
                ps.close();
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
        
        if(contacto.getEmail() != ""){
            String query = "UPDATE contactoagenda SET email=? WHERE id=?";
            try {
                PreparedStatement ps = conn.prepareStatement(query);
                ps.setString(1, contacto.getEmail());
                ps.setInt(2, contacto.getId());
                ps.executeUpdate();
                ps.close();
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
        
        if(contacto.getTelefono() != 0){
            String query = "UPDATE contactoagenda SET telefono=? WHERE id=?";
            try {
                PreparedStatement ps = conn.prepareStatement(query);
                ps.setInt(1, contacto.getTelefono());
                ps.setInt(2, contacto.getId());
                ps.executeUpdate();
                ps.close();
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
    }

    public void deletePersona(Contacto contacto) {
        Connection conn;
        Conexion conex = new Conexion();
        conn = conex.getConexion();

        String query = "DELETE FROM contactoagenda WHERE id=?";
        try {
            PreparedStatement ps = conn.prepareStatement(query);

            ps.setInt(1, contacto.getId());
            ps.executeUpdate();

            ps.close();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public Contacto getContacto(Contacto contacto, Boolean eleccion) {
        Connection conn;
        Conexion conex = new Conexion();
        conn = conex.getConexion();

        List<Contacto> contactos = Collections.emptyList();

        Contacto Encontrado = null;
        try {
            if (eleccion = true) {
                String query = "SELECT * FROM contactoagenda WHERE id=?";
                PreparedStatement ps = conn.prepareStatement(query);
                ps.setInt(1, contacto.getId());
                ResultSet rs = ps.executeQuery();

                while (rs.next()) {
                    Encontrado = new Contacto();
                    Encontrado.setId(rs.getInt("id"));
                    Encontrado.setNombre(rs.getString("nombre"));
                    Encontrado.setApellidos(rs.getString("apellidos"));
                    Encontrado.setEmail(rs.getString("email"));
                    Encontrado.setTelefono(rs.getInt("telefono"));
                    contactos.add(Encontrado);
                }

                rs.close();
                ps.close();
            } else {
                String query = "SELECT * FROM contactoagenda WHERE  telefono=?";
                PreparedStatement ps = conn.prepareStatement(query);
                ps.setInt(1, contacto.getTelefono());
                ResultSet rs = ps.executeQuery();

                while (rs.next()) {
                    Encontrado = new Contacto();
                    Encontrado.setId(rs.getInt("id"));
                    Encontrado.setNombre(rs.getString("nombre"));
                    Encontrado.setApellidos(rs.getString("apellidos"));
                    Encontrado.setEmail(rs.getString("email"));
                    Encontrado.setTelefono(rs.getInt("telefono"));
                    contactos.add(Encontrado);
                }
                rs.close();
                ps.close();
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }

        return (Contacto) contactos;
    }
    
    public List<Contacto> getContactoTelefono(int telefono) throws SQLException {

        List<Contacto> contactos = Collections.emptyList();
        Conexion conex = new Conexion();
        conn = conex.getConexion();

        String query = "SELECT * FROM contactoagenda WHERE telefono LIKE ?";

        try {
            PreparedStatement ps = conn.prepareStatement(query);
            ps.setInt(1, telefono);
            ResultSet rs = ps.executeQuery();
            contactos = new ArrayList<>();

            while (rs.next()) {
                Contacto contacto = new Contacto();
                contacto.setId(rs.getInt("id"));
                contacto.setNombre(rs.getString("nombre"));
                contacto.setApellidos(rs.getString("apellidos"));
                contacto.setTelefono(rs.getInt("telefono"));
                contacto.setEmail(rs.getString("email"));
                contacto.setComentario(rs.getString("comentario"));
                contactos.add(contacto);
            }
            rs.close();
            ps.close();

        } catch (SQLException e) {
            e.printStackTrace();
        }

        return contactos;
    }
    
    public List<Contacto> getContactoNombre(String nombre) throws SQLException {

        List<Contacto> contactos = Collections.emptyList();
        Conexion conex = new Conexion();
        conn = conex.getConexion();

        String query = "SELECT * FROM contactoagenda WHERE nombre LIKE ?";

        try {
            PreparedStatement ps = conn.prepareStatement(query);
            ps.setString(1, nombre);
            ResultSet rs = ps.executeQuery();
            contactos = new ArrayList<>();

            while (rs.next()) {
                Contacto contacto = new Contacto();
                contacto.setId(rs.getInt("id"));
                contacto.setNombre(rs.getString("nombre"));
                contacto.setApellidos(rs.getString("apellidos"));
                contacto.setTelefono(rs.getInt("telefono"));
                contacto.setEmail(rs.getString("email"));
                contacto.setComentario(rs.getString("comentario"));
                contactos.add(contacto);
            }
            rs.close();
            ps.close();

        } catch (SQLException e) {
            e.printStackTrace();
        }

        return contactos;
    }
}
