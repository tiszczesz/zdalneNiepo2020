<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        require "functions.php";
        $tekst = "Alą ma kołta";
        echo InsertIntoText($tekst, '-');
        echo "<br>";
        echo InsertIntoText("sdsfsfsfsfsfs",'-');
        echo "<br>";
        echo InsertIntoText("Bardzo Fajny długi tekst do sprawdzenia łódka",'_');
        ?>
    </div>

</body>

</html>