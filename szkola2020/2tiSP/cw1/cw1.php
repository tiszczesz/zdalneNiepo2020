<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz post</title>
    <style>
        .line{margin: 10px;}
        label{display: inline-block;width: 150px;text-align: right;padding-right: 5px;}
    </style>
</head>
<body>
    <form action="wynik.php" method="post">
        <div class="line">
            <label for="rows">Podaj ilość wierszy: </label>
            <input type="number" name="rows" id="rows">
        </div>
        <div class="line">
            <label for="cols">Podaj ilość kolumn: </label>
            <input type="number" name="cols" id="cols">
        </div>
        <div class="line">
            <input type="submit" value="Generuj">
        </div>
    </form>
</body>
</html>