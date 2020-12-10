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
        $text = "żółty kołnierzyk";
        $text2 = "Fajny długi tekst z wyrazami";
        echo $text." ".mb_strlen($text)."<br>";
    
        echo insertChar($text2,'*')."<br>";   //yyy
        //todo odwrocenie tekstu, liczenie liter w tekscie
        echo strrev("żółty")."<br>";
        echo reverse("żółty")."<br>";  
        
    ?>
</body>
</html>