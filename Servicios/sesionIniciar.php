<?php
include("../Servicios/conexion.php");


// Verificar que se hayan enviado los datos de formulario
if (isset($_POST['TxtNombre']) && isset($_POST['Contraseña'])) {
    $nombre = $_POST['TxtNombre'];
    $contraseña = $_POST['Contraseña'];

    // Consulta SQL para verificar las credenciales
    $query = "SELECT * FROM Usuario WHERE nombre='$nombre' AND contrasena='$contraseña'";
    $result = mysqli_query($conexion, $query);

    session_start();
    // Verificar si se encontró un usuario
    if ($row = $result->fetch_assoc()) {
        $_SESSION['role'] = $row['idRol'] == 1;
    } else {
        $_SESSION["message"] = "Usuario o clave  incorrecta.";
    }
    header("location: ../index.php");
}

mysqli_free_result($result);
mysqli_close($conexion);
