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
    $wyrazy = "łódka żółta ma ładny kolor";  //c-t-r-y-n-a-
    $t2="Ala";
   // var_dump(mb_strlen("ó"));
    echo InsertChar($wyrazy,'_')."<br>";
    echo InsertChar($t2,'+')."<br>";
    ?>
</body>
</html>