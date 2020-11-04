<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacje na plikach</title>
</head>
<body>
    <h1>Operacje na plikach</h1>
    <?php
    $plik = fopen("dane.txt","r");// r r+ w w+ a a+
   // var_dump($plik);
    if($plik){
        while($line = fgets($plik)){  //fgetc ...
            echo "<div>{$line}</div>";
        }
        fclose($plik);
    }
    $plik = fopen("wynik.txt",'w');
    if($plik){
        fwrite($plik,"Ala ma kota".PHP_EOL);
        fclose($plik);
    }
    ?>
</body>
</html>