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
    $wyrazy = "łódka żółta ma ładny kolor";  //c-t-r-y-n-a-
    $t2="Ala";
   // var_dump(mb_strlen("ó"));
    echo InsertChar($wyrazy,'_')."<br>";
    echo InsertChar($t2,'+')."<br>";
    ?>

    <div style="margin:30px;">
        <form  method="post">
        <textarea name="text" id="text" cols="30" rows="5" readonly><?php echo getRandomText();?></textarea><br>
        <label for="search">Szukany tekst: </label>
        <input type="text" name="search" id="search"><br>
        <input type="submit" value="Szukaj tekstu">
        </form>
    </div>
    <div>
    <?php
        if(isset($_POST['text'])){
            $text = trim($_POST['text']);
            $search = trim($_POST['search']);
            $result = mb_strpos(mb_strtolower($text),mb_strtolower($search));
            if($result===false){
                echo "<div>W tekście \"<b>".mb_strtoupper($text)."</b>\" nie znaleziono fragmentu: \"<b>".mb_strtoupper($search)."</b>\"</div>";
            }else{
                echo "<div>W tekście \"<b>".mb_strtoupper($text)."\" znaleziono fragment: \"<b>".mb_strtoupper($search)."</b>\" na miejscu <b>{$result}</b></div>";
            }
        }
    ?>
    </div>
</body>
</html>