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
    <h1>Exercise 5</h1>
    <p>Go to <a href="index.html">index</a></p>
    <hr>
    <form action="php05.php" method="get">
        <div>
            <label>Lines</label>
            <input type="text" name="lines">
            <?php echo error($errors, "lines"); ?>
        </div>
        <div>
            <label>Columns</label>
            <input type="text" name="columns">
            <?php echo error($errors, "lines"); ?>
        </div>
        <div>
            <label>Operation</label>
            <select name="operation">
                <option value="*" selected="selected">Multiplication</option>
                <option value="+">Addition</option>
                <option value="/">Division</option>
                <option value="-">Subtraction</option>
            </select>
            <?php echo error($errors, "operation"); ?>
        </div>
        <div>
            <input type="submit" value="OK">
        </div>
    </form>
    <hr>
    <ul class="shortcuts">
        <li><a href="php05.php?lines=4&columns=4&operation=*">4 x 4</a></li>
        <li><a href="php05.php?lines=5&columns=10&operation=*">5 x 10</a></li>
        <li><a href="php05.php?lines=10&columns=10&operation=*">10 x 10</a></li>
    </ul>
    <hr>

    <?php
    if ($lines != "" and $columns != "") {
        echo times_table_view($lines, $columns, $operation);
    }
    ?>
</body>

</html>