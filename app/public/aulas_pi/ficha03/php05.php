<?php

$lines = $_GET['lines'] ?? null;
$columns = $_GET['columns'] ?? null;
$operation = $_GET['operation'] ?? '*';
$errors = [];

if (
    !is_null($lines)
    && !filter_var($lines, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1, 'max_range' => 20]])
) {
    $errors['lines'] = "'Lines' must be between 1 and 20";
}

if (
    !is_null($columns)
    && !filter_var($columns, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1, 'max_range' => 20]])
) {
    $errors['columns'] = "'Columns' must be between 1 and 20";
}

if (!in_array($operation, ['*', '/', '+', '-'])) {
    $errors['operation'] = "Invalid operation";
}

require("php05.view.php");
