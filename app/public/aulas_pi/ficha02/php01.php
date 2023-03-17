<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Variables</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Exercise 1</h1>

    <?php
    $message = "Hello World";
    $intValue = 12;
    $floatValue = 5.8;
    $boolValue = true;

    echo "<p>String: " . $message . "</p>";
    echo "<p>Integer: " . $intValue . "</p>";
    echo "<p>Float: " . $floatValue . "</p>";
    echo "<p>Boolean: " . $boolValue . " (true = 1 and false = 0)</p>";
    ?>
</body>

</html>