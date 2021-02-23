<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw10.css">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "HtmlCar.php";
    require_once "FileRepo.php";
    $c = new Car();
    echo HtmlCar::carToDiv($c);
    ?>
    <h3>Operacje na samochodach</h3>

    <div class="menu">
        <div class='menu-item'>
            <a href="list.php">Wyświetl wszystkie samochody</a>
        </div>
        <div class='menu-item'>
            <a href="addForm.php">Dodaj nowy samochód</a>
        </div>
        <div class='menu-item'>
            <a href="admin.php">Administracja samochodami</a>
        </div>
    </div>
   

</body>

</html>