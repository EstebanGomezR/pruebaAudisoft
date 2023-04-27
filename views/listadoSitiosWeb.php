<?php
include("./head.php");
require_once("../controllers/sitiosController.php");
$controller = new sitiosController();
$data = $controller->verTodo();
// var_dump($data); 
?>
<div class="d-flex justify-content-between">
    <a href="listadoCategorias.php" class="btn btn-primary">ver Categorias</a>
    <a href="sitioAdd.php" class="btn btn-success">Agregar nuevo sitio</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Sitio</th>
            <th scope="col">Direccion</th>
            <th scope="col">Categoria</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($data == false) {
            echo "<tr class='mx-6'>No hay registros para mostrar</tr>";
        } else {
            foreach ($data as $valor) {
                echo "<tr>";
                echo "<td>" . $valor["id_web"] . "</td>";
                echo "<td>" . $valor["nombre_web"] . "</td>";
                echo "<td>" . $valor["direccion_web"] . "</td>";
                echo "<td>" . $valor["nombre_categoria"] . "</td>";
                echo "<td>";
                echo "<a class='btn btn-secondary' href='sitiosEdit.php?id=" . $valor["id_web"] . "'>editar</a>";
                echo "<a class='btn btn-danger mx-3' href='sitioDelete.php?id=" . $valor["id_web"] . "'>eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }
        }
        ?>

    </tbody>
</table>
<?php
include("./footer.php");
?>