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
        $tekst2 = "Żółtego";
        echo InsertIntoText($tekst, '-');
        echo "<br>";
        echo InsertIntoText("sdsfsfsfsfsfs",'-');
        echo "<br>";
        echo InsertIntoText("Bardzo Fajny długi tekst do sprawdzenia łódka",'_')."<br>";
        echo Reverse("Bardzo Fajny długi tekst do sprawdzenia łódka")."<br>";
        echo implode("",array_reverse(mb_str_split("Bardzo Fajny długi tekst do sprawdzenia łódka")));
        echo "<div>Ilość liter w tekście <b>{$tekst}</b> wynosi: ".countAllAlpha($tekst)."</div>";
        echo "<div>Ilość liter w tekście <b>{$tekst2}</b> wynosi: ".countAllAlpha($tekst2)."</div>";
        echo "<div>Ilość samogłosek w tekście <b>{$tekst2}</b> wynosi: ".countAllVowels($tekst2)."</div>";
        //todo wyszukiwanie w stringu fragmentu tekstu ASCII   utf8
        ?>
    </div>
    <div>
        <?php $mojText = getRandomText();?>
        <form method="post">
            <p >
                <?php echo $mojText ?>
            </p>
            <input type="hidden" name="text" value='<?php echo $mojText;?>'>
            <input type="text" name="wynik" id="wynik" required>
            <input type="submit" value="Szukaj tekstu">
        </form>
    </div>
    <div>
        <?php
            var_dump($_POST);
            if(isset($_POST['wynik'])){
                echo "todo";
            }
        ?>
    </div>

</body>

</html>