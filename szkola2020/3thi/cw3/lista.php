<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cw3.css">
</head>
<body>
    <?php
    require "functions.php";
    $dane = getAll("dane.txt");
    //var_dump($dane);
    echo showInTable($dane);
    ?>
    <div><a href="cw3.php">Powrót na główną stronę</a></div>
</body>
</html>