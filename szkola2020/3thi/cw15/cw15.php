<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="cw15.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
    <h1 class="border-bottom text-center">Zbiór kontaktów</h1>
        <div class="row">
            <nav>
            </nav>
            <div>
                <?php
                require_once "functions.php";
                $contacts = getAll();
                echo toTable($contacts);

                ?>

            </div>

        </div>

    </div>

</body>

</html>