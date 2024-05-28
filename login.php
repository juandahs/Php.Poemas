<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <title>Inicio de sesión</title>
</head>

<body>

    <?php
    if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type']; ?>" role="alert">
            <?= $_SESSION['message']; ?>
            <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close" style="float: right;"></button>

        </div>
    <?php
    }
    ?>

    <form action="servicios/sesionIniciar.php" method="post">
        <h1 class="animate__animated animate__backInLeft">Sistema de Login</h1>
        <p>Usuario <input type="text" placeholder="Ingrese su nombre" name="TxtNombre"></p>
        <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="Contraseña"></p>
        <input type="submit" value="Ingresar">

    </form>

</body>

</html>