<?php
include("./head.php");
require_once("../controllers/categoriasController.php");
$controller = new categoriasController();
$data = $controller->verTodo();
// var_dump($data); 
?>
<div class="d-flex justify-content-between">
    <a href="../index.php" class="btn btn-primary">ver Sitios</a>
    <a href="categoriasAdd.php" class="btn btn-success">Agregar categoria</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>    
            <th scope="col">Id</th>
            <th scope="col">Categoria</th>  
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($data as $valor){
                echo "<tr>";
                echo "<th>".$valor["id_categoria"]."</th>";
                echo "<th>".$valor["nombre_categoria"]."</th>";
                echo "<td>";
                echo "<a class='btn btn-secondary' href='categoriasEdit.php?id=".$valor["id_categoria"]."'>editar</a>";
                echo "<a class='btn btn-danger mx-4' href='categoriasDelete.php?id=".$valor["id_categoria"]."'>eliminar</a>";
                echo "</td>";
                echo "</tr>";
            }
        ?>
        
        
    </tbody>
</table>

<?php
include("./footer.php");
?>