<?php 
include('conexion.php');


if(isset($_POST['BtnAgregar']))
{
    $autor = $_POST['TxtNombreAutor'];
    $titulo = $_POST['TxtTitulo'];
    $poema = $_POST['TxtPoema'];

    $query = "INSERT INTO Poemas (Autor,Titulo,Poema) VALUES ('$autor','$titulo','$poema')";
    $result = mysqli_query($conexion,$query);
    
    if(!$result)
    {
        $_SESSION['message'] = "Ocurrio un error guardando el poema.";
        $_SESSION['message_type'] = "danger";
    }
    else
    {
        $_SESSION['message'] = "El poema fue guardado correctamente";
        $_SESSION['message_type'] = "success";
    }
    
    
    header("location: index.php");

}