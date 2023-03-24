<?php
require_once('html_helpers.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP Forms: Submit to same file | WS #3 | AINET</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <h1>Exercise 4</h1>
    <p>Go to <a href="index.html">index</a></p>
    <hr>
    <form action="php04.php" method="post">
        <div>
            <label>Lines</label>
            <input type="text" name="lines">
        </div>
        <div>
            <label>Columns</label>
            <input type="text" name="columns">
        </div>
        <div>
            <label>Operation</label>
            <select name="operation">
                <option value="*" selected="selected">Multiplication</option>
                <option value="+">Addition</option>
                <option value="/">Division</option>
                <option value="-">Subtraction</option>
            </select>
        </div>
        <div>
            <input type="submit" value="OK">
        </div>
    </form>
    <hr>
    <ul class="shortcuts">
        <li>
            <form action="php04.php" method="post">
                <input type="hidden" name="lines" value="4">
                <input type="hidden" name="columns" value="4">
                <input type="hidden" name="operation" value="*">
                <input type="submit" value="4 x 4">
            </form>
        </li>
        <li>
            <form action="php04.php" method="post">
                <input type="hidden" name="lines" value="5">
                <input type="hidden" name="columns" value="10">
                <input type="hidden" name="operation" value="*">
                <input type="submit" value="5 x 10">
            </form>
        </li>
        <li>
            <form action="php04.php" method="post">
                <input type="hidden" name="lines" value="10">
                <input type="hidden" name="columns" value="10">
                <input type="hidden" name="operation" value="*">
                <input type="submit" value="10 x 10">
            </form>
        </li>
    </ul>
    <hr>

    <?php
    if ($lines != "" and $columns != "") {
        echo times_table_view($lines, $columns, $operation);
    }
    ?>
</body>

</html>