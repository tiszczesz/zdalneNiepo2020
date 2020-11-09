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
    if (!isset($_POST['imie'])) {
        header("Location: cw5.php");
    }
    $imie = trim($_POST['imie']);
    $data = trim($_POST['data']);
    $item = trim($_POST['item']);
    if (saveToFile("lista.txt", $imie, $data, $item)) echo "<div>Zapisano na imprezę</div>";
    else echo "<div style='color:red;font-weight:bold;'>Błąd przy zapisie na imprezę</div>"
    ?>
    <div>
        <a href="lista.php">Zobacz listę</a><br>
        <a href="cw5.php">Dopisz kolejną osobę</a><br>
    </div>
</body>

</html>