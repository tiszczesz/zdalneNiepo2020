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
    <h1>Ćwiczenie 14 CRUD</h1>
    <?php
        require_once "functions.php";
        $dane = getAllWorkers();
     //   var_dump($dane);
        echo workersToTable($dane);
    ?>
</body>
</html>