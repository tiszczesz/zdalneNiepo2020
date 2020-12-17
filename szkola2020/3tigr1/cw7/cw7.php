<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{border-collapse: collapse;margin: 20px;width: 75%;}
    th,td{padding: 5px;border: solid 1px brown;}
    td{text-align: right;}
    tr:nth-child(even){background-color: lightblue;}
    </style>
</head>
<body>
    <?php
    require "functions.php";
    $fn = "daty.txt";
    if(!file_exists($fn)){
        saveToFile($fn,20);
    }
    echo dateToTable("daty.txt");
    ?>
</body>
</html>