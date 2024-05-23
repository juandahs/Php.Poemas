<?php include("Conexion/ConexionBaseDatos.php");
// validación
if (isset($_GET['id'])) {
    
    $id = $_GET['id'];

    $query = "SELECT * FROM poema WHERE Id = $id";
    $result = mysqli_query($Conexion, $Query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $autor = $row['Autor'];
        $titulo = $row['Titulo'];
        $poema =  $row['Poema'];
    }
}
?>
<?php include('includes/header.html')?>
<div class="container">
    <div class="row py-5">
        <div class="col-md-4 mx-auto">
            <div class="card card-body py-3">
                <h2 class="mx-auto">Actualizar Poema</h2>
                <form action="ActualizarPoema.php" method="post">
                    <div>
                        <input type="hidden" name="TxtIdPoema" value="<?= $id; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="TxtNombreAutor" name="TxtNombreAutor" 
                        placeholder="encontrar cuaderno" autofocus required value="<?= $autor; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="Titulo" class="form-label">Titulo</label>
                        <textarea type="text" class="form-control" id="TxtTitulo" rows="2" name="TxtTitulo"  required><?= $titulo; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Poema" class="form-label">Poema</label>
                        <textarea type="text" class="form-control" id="TxtPoema" rows="2" name="TxtPoema"  required><?= $poema; ?></textarea>
                    </div>
                    <div class="py-3">
                        <div class="d-grid gab-2">
                            <button type="submit" class="btn btn-primary" name="ActualizarPoema">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php") ?>