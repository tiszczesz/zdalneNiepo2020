<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_POST['imie'])){
        header("Location: cw3.php");
    }
    //var_dump($_POST);
    $imie = trim($_POST['imie']);
    $nazwisko = trim($_POST['nazwisko']);
    $data = trim($_POST['data']);
    $funkcja = trim($_POST['funkcja']);
    if($imie=='' || $nazwisko=='' || $data==''){
        header("Location: cw3.php");
    }
    $f = fopen("dane.txt","a");
    if($f){
        fwrite($f,$imie.'|'.$nazwisko.'|'.$data.'|'.$funkcja.PHP_EOL);
        fclose($f);
        echo "zapisano na konferencję {$imie} {$nazwisko}<br>";
    }
    ?>
    <div><a href="lista.php">Powrót listy uczestników</a></div>
</body>
</html>