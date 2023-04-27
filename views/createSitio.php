<?php
require_once("../controllers/sitiosController.php");
$controller = new sitiosController();
$controller->guardar($_POST["nombre"], $_POST["direccion"], $_POST["categoria"]);
