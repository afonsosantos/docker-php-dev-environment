<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP Forms: Submit to another file | Class #3 | AINET</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <h1>Exercise 1</h1>
    <p>Go to <a href="index.html">index</a></p>
    <hr>
    <form action="php01-action.php" method="get">
        <div>
            <label>Lines</label>
            <input type="text" name="lines">
        </div>
        <div>
            <label>Columns</label>
            <input type="text" name="columns">
        </div>
        <div>
            <input type="submit" value="OK">
        </div>
    </form>
</body>

</html>