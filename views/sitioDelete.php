<?php
include("./head.php");
?>
<form action="deleteSitio.php" method="POST">
    <div class="card">
        <div class="card-header">
            Desea eliminar??
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>Una vez eliminado no podra recuperar el registro</p>
                <input type="text" name="id" value=<?php echo $_GET['id']?> hidden>
                <a class="btn btn-danger" href="listadoSitiosWeb.php">Cancelar</a>
                <button class="btn btn-primary" type="submit">Aceptar</button>
            </blockquote>
        </div>
    </div>
</form>
<?php
include("./footer.php");
?>