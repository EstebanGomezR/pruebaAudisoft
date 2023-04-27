<?php
include("./head.php");
require_once("../controllers/sitiosController.php");
require_once("../controllers/categoriasController.php");
$controller = new sitiosController();
$data = $controller->verUno($_GET["id"]);
$controllerCategorias = new categoriasController();
$dataCategorias = $controllerCategorias->verTodo();
?>
<form action="editSitio.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id sitio:</label>
    <?php
    echo "<input type='text' class='form-control' name='id_web' value='".$data[0]["id_web"]."' readonly>"
    ?>

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre web:</label>
    <?php
      echo "<input type='text' class='form-control' name='nombre_web' value='".$data[0]["nombre_web"]."'>"
    ?>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">direccion web:</label>
    <?php
      echo "<input type='text' class='form-control' name='direccion_web' value='".$data[0]["direccion_web"]."' required>"
    ?>
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Categoria:</label>
    <select name="categoria_id" id="" class="form-control" value=<?php echo $data[0]["id_categoria"] ?> required>
    <?php
            foreach($dataCategorias as $valor){
                if($data[0]["id_categoria"]== $valor["id_categoria"])
                    echo "<option value =".$valor["id_categoria"]." selected>";
                else
                echo "<option value =".$valor["id_categoria"].">";
                echo $valor["nombre_categoria"];
                echo "</option>";
            }
        ?>
        
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Editar</button>
  <a href="./listadoSitiosWeb.php" class="btn btn-danger">Cancelar</a>
</form>

<?php
include("./footer.php");
?>