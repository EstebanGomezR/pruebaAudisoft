<?php
    require_once("../controllers/categoriasController.php");
    $controller = new categoriasController();
    $controller->edit($_POST["id"], $_POST["categoria"]);