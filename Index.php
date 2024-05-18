<?php 
    //include("Poema.php"); 
    include("PoemaServicio.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poemas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <!--inicio de barra de navegación-->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">Poemario.com</a>
            <form action="formulario.php" method="post">
                <button class="btn btn-outline-light" type="submit" name="BtnMostrar">Nuevo poema</button>
            </form>


        </div>
    </nav>

    <!--barra navegación fin-->
    <?php

    if (isset($_POST['BtnAgregar'])) 
    {
        $poema = new Poema($_POST['txtNomAutor'], $_POST['txtNomPoema'], $_POST['txtPoema']);
        $poemas =  StringToPoema(Obtener());
        array_push($poemas, $poema); 
        Guardar($poemas);
    }

    ?>

    <div class="container mt-5">

        <!--Se imprimen las tarjtas con los poemas-->
        <div class="row">

            <?php
            $contenidoArchivo = Obtener();
            $poemas =  StringToPoema($contenidoArchivo);
            foreach ($poemas as $poema) {

                echo '
            <div class="col-md-4 py-2">
                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWuzpo0cJCQfNZGw605nH8Kuib6l3YA2-TrXJJh69D9A&s" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">' . $poema->Titulo . '</h5>
                        <p class="card-text">' . $poema->Autor . '</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal" data-bs-poema="' . $poema->Titulo . '*' . $poema->Autor . '*' . rtrim(ltrim($poema->Poema)) . '">
                            Leer poema
                        </button>
                    </div>
                </div>
            </div>';
            }
            ?>

            <!-- Modal -->
            <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="poemaTitulo"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h6 id="poemaAutor"></h6>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="poemaCuerpo" style="height: 250px" disabled></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="Index.js"></script>
</body>

</html>