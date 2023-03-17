<?php
$formData = isset($_POST["submit"]) ? $_POST : null;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="container my-5">
    <h2>Form</h2>
    <form method="post">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="firstName">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="emailAddress" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="emailAddress" name="emailAddress">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="checkMe" name="checkMe">
            <label class="form-check-label" for="checkMe">Check me</label>
        </div>
        <button type="submit" class="btn btn-primary my-3" name="submit">Submit</button>
    </form>

    <?php if ($formData != null) { ?>
        <h2 class="mt-2">Form Submission</h2>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Checkbox Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php echo $formData["firstName"] . " " . $formData["lastName"]; ?>
                    </td>
                    <td>
                        <?php echo $formData["emailAddress"]; ?>
                    </td>
                    <td>
                        <?php echo $formData["checkMe"] == "on" ? "Yes" : "No"; ?>
                    </td>
                </tr>
            </tbody>
        </table>
    <?php } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>