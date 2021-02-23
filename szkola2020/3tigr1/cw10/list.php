<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista samochodów</h1>
    <?php
    require_once "FileRepo.php";
    require_once "HtmlCar.php";
    $dane =  FileRepo::getAll("dane.txt");
    //var_dump($dane);
    echo HtmlCar::allToList($dane,true);
    ?>
     <div><a href="cw10.php">Powrót</a></div>
</body>
</html>