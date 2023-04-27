<?php
include("./head.php");
?>
<form action="deleteCategoria.php" method="POST">
    <div class="card">
        <div class="card-header">
            Desea eliminar??
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <?php 
                    require_once("../controllers/sitiosController.php");
                    $controller = new sitiosController();
                    $data = $controller->verCategoriaUso($_GET["id"]);
                    if(!$data){
                        echo "<p>Una vez eliminado no podra recuperar el registro</p>";
                        echo "<button class='btn btn-primary' type='submit'>Aceptar</button>";
                    }
                    else{
                        echo "<p>No puede eliminar una categoria en uso</p>";
                    }

                ?>
                
                <input type="text" name="id" value=<?php echo $_GET['id']?> hidden>
                
                <a class="btn btn-danger" href="listadoCAtegorias.php">Cancelar</a>
            </blockquote>
        </div>
    </div>
</form>
<?php
include("./footer.php");
?>