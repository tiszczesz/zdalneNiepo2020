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
        echo addSpace($tekst,'-');
        echo "<br>";
        echo addSpace("Duża krowa żółta",'-')."<br>";
        echo Reverse(addSpace("Duża krowa żółta","-"))."<br>";
        echo Reverse2(addSpace("Duża krowa żółta","-"))."<br>";
        echo "<div>Ilość liter: ".countAlpha("Duża krowa żółta")."</div>\n";
        $txt = "Ala ma kota";
        echo "<div>Ilość samogłosek w tekście: {$txt}: ".countVowels($txt)."</div>"
       // var_dump(mb_strstr("ó","róba"));
        //todo samogloski w tekscie
    ?>
   


</body>
</html>