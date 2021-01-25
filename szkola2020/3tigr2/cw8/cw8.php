<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{border-collapse: collapse;margin-left: 20px;}
        th,td{border: solid 1px black;padding: 5px;}
        th{background-color: grey;font-weight: bold;}
        tr:nth-child(even){background-color: lightgreen;}
        td{text-align: right;}
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Operacje na datach podsumowanie</h1>
    <?php
    require "functions.php";
   // echo getRndDate(-10,30)."<br>";
   // echo getRndDate(10,-30)."<br>";
   if(!file_exists("daty.txt")){
       dateToFile("daty.txt");
   }
   echo datesToTable("daty.txt");
    ?>
</body>
</html>