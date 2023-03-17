<?php
$lines = "";
$columns = "";

if (
    isset($_POST["lines"])
    and isset($_POST["columns"])
    and isset($_POST["operation"])
) {
    $lines = $_POST["lines"];
    $columns = $_POST["columns"];
    $operation = $_POST["operation"];
}

require("php04.view.php");
