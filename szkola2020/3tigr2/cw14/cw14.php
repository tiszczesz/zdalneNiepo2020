<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="cw14.css">
    <title>Ćwiczenie 14 CRUD</title>
</head>

<body>
    <div class="container">
        <h1>Ćwiczenie 14 CRUD</h1>
        <div class="main">
            <nav>
            <a href="addNew.php" class="btn btn-primary w-75">Nowy rekord</a><br>
            
            </nav>
            <div>
                <?php
                require_once "functions.php";
                $dane = getAllWorkers();
                // var_dump($dane);
                echo workersToTable($dane);
                ?>
            </div>
        </div>


    </div>

</body>

</html>