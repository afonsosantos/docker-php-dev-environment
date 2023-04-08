<?php

use controllers\DisciplinaController;

require __DIR__ . "/../vendor/autoload.php";

$controller = new DisciplinaController();
$controller->index();
