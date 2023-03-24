<?php
require_once('html_helpers.php');

// validate GET input
$lines = $_GET["lines"];
$columns = $_GET["columns"];

$safeLines = filter_var($lines, FILTER_VALIDATE_INT);
$safeColumns = filter_var($columns, FILTER_VALIDATE_INT);
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP: Numbers tables | WS #3 | AINET</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <h1>Numbers Table</h1>
    <?php
    if ($safeLines !== false and $safeColumns !== false) {
        echo times_table_view($safeLines, $safeColumns);
    } else {
        echo "Values are not integers!";
    }
    ?>
</body>

</html>