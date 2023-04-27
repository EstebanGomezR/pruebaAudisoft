<?php
include("./head.php");
require_once("../controllers/categoriasController.php");
$controllerCategorias = new categoriasController();
$dataCategorias = $controllerCategorias->verTodo();
?>
<form action="createSitio.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre sitio:</label>
    <input type="text" class="form-control" name="nombre" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">direccion sitio:</label>
    <input type="text" class="form-control" name="direccion" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Categoria:</label>
    <select name="categoria" id="" class="form-control" value=<?php echo $data[0]["id_categoria"] ?> required>
      <option>Seleccione</option>
      <?php
      foreach ($dataCategorias as $valor) {
        echo "<option value =" . $valor["id_categoria"] . ">";
        echo $valor["nombre_categoria"];
        echo "</option>";
      }
      ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a class="btn btn-danger" href="listadoSitiosWeb.php">Cancelar</a>
</form>

<?php
include("./footer.php");
?>