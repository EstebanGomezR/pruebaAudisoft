<?php
include("./head.php");
?>
<form action="createCategorie.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre categoria:</label>
    <input type="text" class="form-control" name="categoria">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

<?php
include("./footer.php");
?>