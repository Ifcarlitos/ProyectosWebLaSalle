<?php

function conexion() {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "agendacontactos";
    $conexion = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

    return $conexion;
}

function buscar($todo, $busqueda, $Conquebuscar) {
    $con = conexion();
    if ($todo == true) {
        $sql = 'SELECT * FROM contactoagenda';
    } else {
        if ($Conquebuscar == 1) {
            $sql = "SELECT * FROM contactoagenda WHERE nombre LIKE '%$busqueda%'";
        } elseif ($Conquebuscar == 2) {
            $sql = "SELECT * FROM contactoagenda WHERE telefono LIKE '%$busqueda%'";
        } else {
            echo 'no hay datos';
        }
    }
    $datos = mysqli_query($con, $sql);
    tabla($datos);
}

function tabla($datos) {
    echo'
        <table class="table">
        <br>
        <table class="table">
            <tr>
                <td scope="col">id</td>
                <td scope="col">nombre</td>
                <td scope="col">apellidos</td>
                <td scope="col">telefono</td>
                <td scope="col">email</td>
                <td scope="col">comentario</td>
            </tr>';
    while ($mostrar = mysqli_fetch_array($datos)) {
        echo '<tr>';
        echo "<td>";
        echo $mostrar['id'];
        echo"</td>";
        echo "<td>";
        echo $mostrar['nombre'];
        echo'</td>';
        echo "<td>";
        echo $mostrar['apellidos'];
        echo'</td>';
        echo "<td>";
        echo $mostrar['telefono'];
        echo'</td>';
        echo "<td>";
        echo $mostrar['email'];
        echo'</td>';
        echo "<td>";
        echo $mostrar['comentario'];
        echo'</td>';
        echo '</tr>';
    }
    echo'</table>';
}

function nuevousuario($id, $nombre, $apellidos, $telefono, $email, $comentario) {
    $conexion = conexion();
    $sqlinsert = "INSERT INTO contactoagenda (nombre, apellidos, telefono, email, comentario) VALUES ('$nombre', '$apellidos', '$telefono', '$email', '$comentario');";
    $queryinsert = mysqli_query($conexion, $sqlinsert);

    if ($queryinsert == true) {
        echo '<br>';
        echo '<div class="alert alert-primary" role="alert">';
        echo '<p> Con nombre: ';
        echo $nombre;
        echo '</p>';
        echo '<p> Con telefono: ';
        echo $telefono;
        echo '</p>';
        echo '</div>';
    } else {
        echo'<h1>Error</h1>';
    }
}

function editarUsuario($busqueda, $nombre, $apellido, $telefono, $email, $comentario) {
    $conexion = conexion();
    if ($nombre <> '') {
        $consulta = "UPDATE contactoagenda SET nombre='$nombre' WHERE id='$busqueda'";
        mysqli_query($conexion, $consulta);
    }
    if ($apellido <> '') {
        $consulta = "UPDATE contactoagenda SET apellidos='$apellido' WHERE id='$busqueda'";
        mysqli_query($conexion, $consulta);
    }
    if ($telefono <> '') {
        $consulta = "UPDATE contactoagenda SET telefono='$telefono' WHERE id='$busqueda'";
        mysqli_query($conexion, $consulta);
    }
    if ($email <> '') {
        $consulta = "UPDATE contactoagenda SET email='$email' WHERE id='$busqueda'";
        mysqli_query($conexion, $consulta);
    }
    if ($comentario <> '') {
        $consulta = "UPDATE contactoagenda SET comentario='$comentario' WHERE id='$busqueda'";
        mysqli_query($conexion, $consulta);
    }
}

function eliminarUsuario($busqueda) {
    $conexion = conexion();
    $consulta = "DELETE FROM contactoagenda WHERE id='$busqueda'";
    if (mysqli_query($conexion, $consulta)) {
        echo 'Contacto ' . $busqueda . ' eliminado';
    } else {
        echo 'Error';
    }
}
?>