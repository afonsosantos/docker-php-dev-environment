<?php
include_once "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Letter histogram</title>

    <style>
        table {
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid black;
            text-align: center;
            vertical-align: middle;
            color: black;
            padding: 10px;
        }

        tr.bg {
            background-color: #ffd580;
        }
    </style>
</head>

<body>
    <h1>Exercise 5</h1>

    <?php echo letter_histogram(); ?>
</body>

</html>