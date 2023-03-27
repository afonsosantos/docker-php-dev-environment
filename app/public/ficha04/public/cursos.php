<?php

use controllers\CursoController;

require __DIR__ . "/../vendor/autoload.php";

$controller = new CursoController();
$controller->index();
