<?php
    require_once("../controllers/sitiosController.php");
    $controller = new sitiosController();
    $controller->edit($_POST["id_web"], $_POST["nombre_web"],  $_POST["direccion_web"], $_POST["categoria_id"]);