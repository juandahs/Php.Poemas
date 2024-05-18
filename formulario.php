<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="index.php" method="post">
                    <div class="mb-3">
                        <label for="LblNomPoema" class="form-label">nombre poema</label>
                        <input type="Text" class="form-control" id="txtNomPoema" aria-describedby="emailHelp" name="txtNomPoema">
                        <div class="form-text">Ingrese el nombre del Poema</div>
                    </div>
                    <div class="mb-3">
                        <label for="LblNomAutor" class="form-label">Nombre del Autor</label>
                        <input type="Text" class="form-control" id="TxtNomAutor" name="txtNomAutor">
                        <div class="form-text">Ingrese el nombre del Autor</div>
                    </div>
                    <div class="mb-3">
                        <label for="LblPoema" class="form-label">Poema</label>
                        <input type="Text" class="form-control" id="TxtPoema" name="txtPoema">
                        <div class="form-text">Ingrese el Poema</div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="BtnAgregar">Agregar</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>