<?php
include("./head.php");
require_once("../controllers/categoriasController.php");
$controller = new categoriasController();
$data = $controller->verUno($_GET["id"]);
?>
<form action="editCategoria.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id categoria:</label>
    <?php 
    echo "<input type='text' class='form-control' name='id' value='".$data[0]["id_categoria"]."' readonly>"
    ?>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre categoria:</label>
    <?php 
      echo "<input type='text' class='form-control' name='categoria' value='".$data[0]["nombre_categoria"]."'>"
    ?>
  </div>
  <button type="submit" class="btn btn-primary">Editar</button>
  <a href="/listadoCategorias.php" class="btn btn-danger">Cancelar</a>
</form>

<?php
include("./footer.php");
?>