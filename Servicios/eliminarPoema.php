<?php
include("conexion.php");

if (isset($_GET['id']))
{
  $id = $_GET['id'];
  $query =  "DELETE FROM poema WHERE id = $id";
  $result = mysqli_query($conexion, $query);

  if (!$result) {
    $_SESSION['message'] = "Ocurrio un error eliminando el poema.";
    $_SESSION['message_type'] = "danger";
  }else
  {
    $_SESSION['message'] = "Poema eliminado correctamente.";
    $_SESSION['message_type'] = "danger";
  }
  
  header("location: ../index.php");
}
