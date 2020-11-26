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
    echo insertChar($t1,'_').'<br>';
    echo "Ilość znaków: ".mb_strlen($t1).'<br>';
    echo reverse($t1).'<br>';
    echo reverse2($t1).'<br>';
    var_dump(mb_str_split2($t1));
    ?>
</body>
</html>