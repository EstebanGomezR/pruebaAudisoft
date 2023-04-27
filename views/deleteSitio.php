<?php
    require_once("../controllers/sitiosController.php");
    $controller = new sitiosController();
    $controller->delete($_POST["id"]);