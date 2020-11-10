<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wynik</title>
</head>
<body>
    <?php
    require "functions.php";
    if(isset($_POST['imie'])){
        $imie = trim($_POST['imie']);
        $nazwisko = trim($_POST['nazwisko']);
        $ocena = floatval($_POST['ocena']);
        $przedmiot = trim($_POST['przedmiot']);
        if(empty($imie)|| empty($nazwisko) || $ocena<1 || $ocena>6){
            header("Location: cw5.php");
        }
        $f = fopen("info.txt","a");
        if($f){
            fwrite($f,$imie.'|'.$nazwisko.'|'.$ocena.'|'.$przedmiot.PHP_EOL);
            fclose($f);
        }
    } 

    ?>
    <div><a href="all.php">Zobacz całą listę</a></div>
    <div><a href="cw5.php">Dodaj nowy wpis</a></div>
    
    
</body>
</html>