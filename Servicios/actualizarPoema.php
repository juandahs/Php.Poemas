<?php 

  // Verificar si el usuario está autenticado
  if (!isset($_SESSION["role"])) {
    header("location: login.php");
}
include("conexion.php"); 

    $id = $_POST['TxtIdPoema'];
    $autor = $_POST['TxtNombreAutor'];
    $titulo = $_POST['TxtTitulo'];
    $poema = $_POST['TxtPoema'];   

    $query = "UPDATE poema SET autor='$autor', titulo='$titulo', contenido='$poema' WHERE id= $id";

    $result = mysqli_query($conexion,$query);
    if(!$result)
    {
        die("Ocurrio un error insertando el poema.");
    }
    $_SESSION['message'] = "Poema insertado correctamente.";
    $_SESSION['message_type'] = "success";
    header("location: ../index.php");