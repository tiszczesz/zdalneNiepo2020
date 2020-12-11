<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "functions.php";
    $fn = "daty.txt";
    if(!file_exists($fn)){
        saveToFile($fn,20);
    }
    ?>
</body>
</html>