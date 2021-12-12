package Dao;


import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class Conexion {

    private static final String MYSQL_URL = "jdbc:mysql://localhost/agendacontactos";
    private static final String MYSQL_USER = "root";
    private static final String MYSQL_PASSWORD = "";
    static Connection get;

    public Conexion() {
        // TODO Auto-generated constructor stub
    }

    public static final String URL = "jdbc:mysql://localhost:3306/agendacontactos";
    public static final String USER = "root";
    public static final String CLAVE = "";
     
    public Connection getConexion(){
        Connection con = null;
        try{
            Class.forName("com.mysql.jdbc.Driver");
            con = (Connection) DriverManager.getConnection(URL, USER, CLAVE);
        }catch(Exception e){
            System.out.println("Error: " + e.getMessage());
        }
        return con;
    }

}
