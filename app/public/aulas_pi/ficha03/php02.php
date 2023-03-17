<?php
$lines = "";
$columns = "";

if (isset($_GET["lines"]) and isset($_GET["columns"])) {
    $lines = $_GET["lines"];
    $columns = $_GET["columns"];
}

require("php02.view.php");
