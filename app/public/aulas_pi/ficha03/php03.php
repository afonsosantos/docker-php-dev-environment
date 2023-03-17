<?php
$lines = "";
$columns = "";

if (
    isset($_GET["lines"])
    and isset($_GET["columns"])
    and isset($_GET["operation"])
) {
    $lines = $_GET["lines"];
    $columns = $_GET["columns"];
    $operation = $_GET["operation"];
}

require("php03.view.php");
