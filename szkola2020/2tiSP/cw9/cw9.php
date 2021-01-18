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
       if(!file_exists("daty.txt")){
           dateToFile("daty.txt");
       }
       //echo FunkcjaDoZrobienia()
    ?>
    <!--todo generowanie tabelki html z data pocz i konc oraz różnicą
       w latach tygodniach minutach-->
</body>
</html>