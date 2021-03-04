<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw12.css">
    <title>Ćwiczenie 12 - biblioteka</title>
</head>
<body>
    <h1>Ćwiczenie 12 - biblioteka</h1>
    <?php
    require_once "Item.php";
    $i1 = new Item();
    $i2 = new Item();
    $i3 = new Item();
    var_dump($i1);
    var_dump($i2);
    var_dump($i3);
    $json = $i1->toJSON();
    var_dump(json_decode($json));
    ?>
</body>
</html>