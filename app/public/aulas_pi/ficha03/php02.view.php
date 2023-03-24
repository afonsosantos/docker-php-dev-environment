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
    <h1>Exercise 2</h1>
    <p>Go to <a href="index.html">index</a></p>
    <hr>
    <form action="php02.php" method="get">
        <div>
            <label>Lines</label>
            <input type="text" name="lines" value="<?php echo $lines; ?>">
        </div>
        <div>
            <label>Columns</label>
            <input type="text" name="columns" value="<?php echo $columns; ?>">
        </div>
        <div>
            <input type="submit" value="OK">
        </div>
    </form>
    <hr>
    <ul class="shortcuts">
        <li><a href="php02.php?lines=4&columns=4">4 x 4</a></li>
        <li><a href="php02.php?lines=5&columns=10">5 x 10</a></li>
        <li><a href="php02.php?lines=10&columns=10">10 x 10</a></li>
    </ul>
    <hr>

    <?php
    if ($lines != "" and $columns != "") {
        echo times_table_view($lines, $columns);
    }
    ?>
</body>

</html>