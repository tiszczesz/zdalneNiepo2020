<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapisano do pliku</title>
</head>

<body>
    <h1>Zapisanie na imprezę</h1>
    <?php
    require "functions.php";
    if (isset($_POST['imie'])) {
        $imie = trim($_POST['imie']);
        $data = trim($_POST['data']);
        $items = trim($_POST['items']);
        if ($imie != '' && $data != '') {
            $plik = fopen("lista.txt", "a");
            if ($plik) {
                fwrite($plik,$imie.'|'.$data.'|'.$items.PHP_EOL);
                fclose($plik);
                echo "<div style='color:green;'>Zapisano na imprezę {$imie} z datą {$data}</div>";
            }
        }else{
                echo "<div style='color:red;'>Błąd zapisu lub brak danych!!</div>";
            }
    }
    ?>
    <div>
        <a href="cw4.php">Dopisz kolejną osobę</a><br>
        <a href="lista.php">Zobacz uczestników</a><br>
    </div>
</body>

</html>