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
       

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="cw15.php">Lista kontaktów</a></li>
                <li class="nav-item active"><a class="nav-link" href="addNew.html">Dodaj kontakt</a></li>
                <li class="nav-item"><a class="nav-link" href="">Atrapa</a></li>
                <li class="nav-item"><a class="nav-link" href="">Atrapa</a></li>
            </ul>

        </nav> <h1 class="border-bottom text-center mt-10">Lista kontaktów</h1>
        <div>
            <?php
            require_once "functions.php";
            $contacts = getAll();
            echo toTable($contacts);

            ?>

        </div>



    </div>

</body>

</html>