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
    var_dump($_POST);
    if(isset($_POST['imie'])){
        $imie = trim($_POST['imie']);
        $nazwisko = trim($_POST['nazwisko']);
        $data = trim($_POST['data']);
        $lekarzID = trim($_POST['lekarzID']);
        $opis = trim($_POST['opis']);
        insertPacjent([$imie,$nazwisko,$data,$opis,$lekarzID]);
        echo "<div>Dodano wizytę</div>";
    }
    ?>
    <div><a href="all.php">Zobacz wszystkie wizyty</a></div>
</body>
</html>