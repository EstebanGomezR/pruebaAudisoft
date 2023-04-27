<?php
    require_once("../controllers/categoriasController.php");
    $controller = new categoriasController();
    $controller->delete($_POST["id"]);