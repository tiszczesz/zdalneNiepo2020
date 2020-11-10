<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{border-collapse: collapse;}
    td,th{border: dashed 1px blue;padding: 6px;}
    </style>
</head>
<body>
    <?php
    require "functions.php";
    $dane = getFromFile("lista.txt");
    echo showList($dane);
    echo toTable($dane);
    ?>

<div>       
        <a href="cw5.php">Dopisz kolejną osobę</a><br>
    </div>
</body>
</html>