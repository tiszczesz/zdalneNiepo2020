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
    $t1 = "Jabłko żółte i czerwone"; // R-y-b-k-a
    $t2 = "Łódka";
    echo insertChar($t1, '_') . '<br>';
    echo "Ilość znaków: " . mb_strlen($t1) . '<br>';
    echo reverse($t1) . '<br>';
    echo reverse2($t1) . '<br>';
    // var_dump(mb_str_split2($t1));
    echo "<div>Ilość liter w \"{$t2}\" wynosi: " . countAlpha($t2) . "</div>";
    // var_dump(mb_list_encodings());
    //var_dump($_SERVER);
    ?>

    <div>

        <form method="post">
            <textarea name="text" id="text" cols="30" rows="3" readonly><?=getRandom();?></textarea><br>
            <label for="search">Tekst do wyszukania: </label>
            <input type="text" name="search" id="search" required><br>
            <input type="submit" value="Szukaj w tekście">
        </form>
    </div>

    <?php
        if(isset($_POST['search'])){
            $text = trim($_POST['text']);
            $search = trim($_POST['search']);
            $result = mb_strpos(mb_strtolower($text),mb_strtolower($search));
            if($result===false){
                echo "<div>W tekście: <b>\"{$text}\"</b> nie znaleziono <b>\"".mb_strtoupper($search)."\"</b></div>";
            }else{
                echo "<div>W tekście: <b>\"{$text}\"</b> znaleziono <b>\"{$search}\"</b> na miejscu <b>{$result}</b></div>";
            }
        }
    ?>
</body>

</html>