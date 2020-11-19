<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cw4.css">
</head>

<body>
    <?php
    require "functions.php";
    if (!isset($_GET['id'])) {
        header("Location: lista.php");
    }
    $id = intval($_GET['id']);
    $dane = getAll("lista.txt");
    //var_dump($dane);
    $toEdit = $dane[$id];
    //var_dump($toEdit);
    ?>
    <form method="post">
        <div class="line">
            <label for="imie">Podaj imię: </label>
            <input type="hidden" name="id" value="<?php echo $id;  ?>">
            <input type="text" name="imie" id="imie" value="<?php echo $toEdit[0]; ?>">
        </div>
        <div class="line">
            <label for="data">Preferowana data imprezy: </label>
            <input type="date" name="data" id="data" value="<?php echo $toEdit[1]; ?>">
        </div>
        <div class="line">
            <label for="items">Co przyniosę: </label>
            <?php
            $items = getAllItems("items.txt");
            echo itemsToSelect($items, $toEdit[2]);
            ?>

        </div>
        <div class="line">
            <label for=""></label>
            <input type="submit" value="Zapisz zmiany">
        </div>
    </form>

    <?php
    if (isset($_POST['id'])) {
        $imie = trim($_POST['imie']);
        $data = trim($_POST['data']);
        $items = trim($_POST['items']);
        $id = intval($_POST['id']);
       // var_dump($dane);
        if ($imie != '' && $data != '') {
            $dane[$id] = [$imie, $data, $items];
          //  var_dump($dane);
          saveAll("lista.txt",$dane);
        }
        header("Location: lista.php");
    }
    ?>
</body>

</html>