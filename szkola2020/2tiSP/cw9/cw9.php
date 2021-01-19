<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{border-collapse: collapse;width: 80%;margin: 20px;}
        td,th{border:solid 1px black; padding: 3px;}
        th{background-color: grey;}
        tr:nth-child(even){background-color: lightblue;}
        td{text-align: right;}
    </style>
    <title>Document</title>
</head>
<body>
    <?php
        require "functions.php";
       if(!file_exists("daty.txt")){
           dateToFile("daty.txt");
       }
       //echo FunkcjaDoZrobienia() 
       echo datesToTable("daty.txt");
    ?>
    <!--todo generowanie tabelki html z data pocz i konc oraz różnicą
       w latach tygodniach minutach-->

      
</body>
</html>