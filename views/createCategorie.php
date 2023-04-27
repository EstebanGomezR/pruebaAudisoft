<?php
    require_once("../controllers/categoriasController.php");
    $controller = new categoriasController();
    $controller->guardar($_POST["categoria"]);