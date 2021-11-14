<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "agendacontactos";
 $conexion = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
   
?>