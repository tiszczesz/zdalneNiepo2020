<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista uczestników imprezy</title>
    <link rel="stylesheet" href="cw4.css">
</head>
<body>
    <h1>Lista uczestników imprezy</h1>
    <?php
    require "functions.php";
    $dane = getAll("lista.txt");
    //var_dump($dane);
    echo daneToList($dane);
    ?>
</body>
</html>