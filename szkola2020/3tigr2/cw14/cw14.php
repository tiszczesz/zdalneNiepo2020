<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Ćwiczenie 14 CRUD</title>
</head>

<body>
    <div class="container">
        <h1>Ćwiczenie 14 CRUD</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="dropdown-item" href="cw14.php">Lista pracowników</a>
            </li>
            <li class="nav-item">
                <a class="dropdown-item" href="addNew.php" href="">Dodaj nowego pracownika</a>
            </li>
            <li class="nav-item">
                <a class="dropdown-item" href="listDiv.php" href="">Lista działów</a>
            </li>
            <li class="nav-item">
                <a class="dropdown-item" href="addNewDiv.php" href="">Dodaj nowy dział</a>
            </li>
        </ul>
        
        </nav>
        <?php
        require_once "functions.php";
        $dane = getAllWorkers();
        //   var_dump($dane);
        echo workersToTable($dane);
        ?>
    </div>

</body>

</html>