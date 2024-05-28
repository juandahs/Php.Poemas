<?php
include('conexion.php');

// Verificar si el usuario está autenticado
if (!isset($_SESSION["role"])) {
    header("location: login.php");
}

if (isset($_POST['BtnAgregar'])) {
    echo "Entro al condicional";
    $autor = $_POST['TxtNombreAutor'];
    $titulo = $_POST['TxtTitulo'];
    $poema = $_POST['TxtPoema'];

    $query = "INSERT INTO poema (autor,titulo,contenido) VALUES ('$autor','$titulo','$poema')";
    $result = mysqli_query($conexion, $query);

    if (!$result) {
        $_SESSION['message'] = "Ocurrio un error guardando el poema.";
        $_SESSION['message_type'] = "danger";
    } else {
        $_SESSION['message'] = "El poema fue guardado correctamente";
        $_SESSION['message_type'] = "success";
    }


    header("location: ../index.php");
}
