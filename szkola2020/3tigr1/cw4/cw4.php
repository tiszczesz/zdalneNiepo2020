<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require "functions.php";
    $tekst = "Ala podwódna";
    echo addSpace($tekst, '-');
    echo "<br>";
    echo addSpace("Duża krowa żółta", '-') . "<br>";
    echo Reverse(addSpace("Duża krowa żółta", "-")) . "<br>";
    echo Reverse2(addSpace("Duża krowa żółta", "-")) . "<br>";
    echo "<div>Ilość liter: " . countAlpha("Duża krowa żółta") . "</div>\n";
    $txt = "Ala ma kota";
    echo "<div>Ilość samogłosek w tekście: {$txt}: " . countVowels($txt) . "</div>";
    // var_dump(mb_strstr("ó","róba"));
    //todo samogloski w tekscie
    $str = "<div>Ala ma <b>KOTA</b></div>";
    echo $str;
    echo htmlentities($str);
    $content = file_get_contents("dane.txt");
    echo nl2br($content);
    ?>

    <div>
        <form method="post">
            <textarea name="tekst" id="tekst" cols="30" rows="2" readonly><?php echo getRandomText(); ?></textarea><br>
            <input type="text" name="szukane" id="szukane">
            <input type="submit" value="Wyszukaj">
        </form>
    </div>
    <div style="margin:30px;padding:10px;border: solid 1px green;">
        <?php
            if(isset($_POST['tekst'])){
                $tekst = trim($_POST['tekst']);
                $szukana = trim($_POST['szukane']);
                echo Search($tekst,$szukana);
            }
             //   Ryba jest -> RyBa JeSt
        ?>
    </div>

</body>

</html>