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
    //echo getRandomDate(-10,30)."<br>";
    //echo getRandomDate(30,-10);
    if(!file_exists("daty.txt")){
        datesToFile("daty.txt",-30);
    }
    echo datesToTable("daty.txt");
    ?>
</body>
</html>