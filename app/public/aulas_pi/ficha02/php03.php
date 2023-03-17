<?php
include_once "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Prime numbers</title>
</head>

<body>
    <h1>Exercise 3</h1>

    <form method="get">
        <label for="number">Insert a number: </label>
        <input type="number" min="1" max="100" name="number" id="number">
        <input type="submit" value="OK">
    </form>

    <?php
    if (isset($_GET["number"])) {
        echo prime_numbers_view($_GET["number"]);
    }
    ?>
</body>

</html>