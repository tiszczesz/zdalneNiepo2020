<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Operacje na plikach w php</h1>
    <?php
    $plik = fopen("wynik.txt", "a");
    if ($plik) {
        fwrite($plik, "Fajna treść do pliku: " . date("h-i-s, m-d-Y") . PHP_EOL);
        fclose($plik);
    }
    $plik = fopen("wynik.txt", "r");
    //var_dump($plik);
    if ($plik) {
        while ($line = fgets($plik)) {
            echo "<div>{$line}</div>";
        }
        if (!feof($plik)) echo "<div>Bład odczytu</div>";
        else  echo "<div>Odczytano plik do końca!!</div>";

        fclose($plik);
    }

    ?>
</body>

</html>