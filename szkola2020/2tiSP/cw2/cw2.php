<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <div class="line">
            <label for="podstawa">Podaj Podstawę: </label>
            <input type="number" name="podstawa" id="podstawa">
        </div>
        <div class="line">
            <label for="wykladnik">Podaj Wykładnik: </label>
            <input type="number" name="wykladnik" id="wykladnik">
        </div>
        <div class="line">
            <input type="submit" value="Oblicz">
        </div>
    </form>
    <div id="wynik">
        <?php
        var_dump($_POST);
        if (isset($_POST['podstawa'])) {
            $p = intval($_POST['podstawa']);
            $w = intval($_POST['wykladnik']);
            echo "<div>{$p}<sup>{$w}</sup> = ".pow($p,$w)."</div>";
        } else {
            echo "brak danych";
        }
        ?>
    </div>
</body>

</html>