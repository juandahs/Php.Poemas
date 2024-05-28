<?php
include("../Servicios/conexion.php");

// Verificar que se hayan enviado los datos de formulario
if (isset($_POST['TxtNombre']) && isset($_POST['Contraseña'])) {
    $nombre = $_POST['TxtNombre'];
    $contraseña = $_POST['Contraseña'];

    // Consulta SQL para verificar las credenciales
    $query = "SELECT * FROM Usuario WHERE nombre='$nombre' AND contrasena='$contraseña'";
    $result = mysqli_query($conexion, $query);

    // Verificar si se encontró un usuario
    if ($row = $result->fetch_assoc()) {
        // Iniciar sesión y guardar el rol del usuario
        session_start();
        $_SESSION['role'] = $row['idRol'] == 1;

        // Redirigir al index.php según el rol del usuario
        if ($_SESSION['role']) {
            header("location:../Index.php");
            exit;
        } else {
            header("location:../Index.php");
            exit;
        }
    } else {
        // Mostrar mensaje de error si no se encontró un usuario
       ?>
        <h1 class="bad">ERROR DE AUTENTIFICACIÓN</h1>
        <?php
    }
}

mysqli_free_result($result);
mysqli_close($conexion);