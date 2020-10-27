<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Odczyt i zapis do pliku</h1>
    <?php
    $f = fopen("dane.txt",'r');
    //var_dump($f);
    if($f){
        while($line  = fgets($f)){
            echo "<div>{$line}</div>";
        }
        fclose($f);
    }
    $f = fopen("wynik.txt",'a');
    if($f){
        fwrite($f,"ala ma kota".PHP_EOL);
        fclose($f);
    }
    ?>
</body>
</html>