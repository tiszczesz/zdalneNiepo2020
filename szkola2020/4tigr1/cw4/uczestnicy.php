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
    if(isset($_GET['id'])){
        $id = intval($_GET['id']);
        echo "uczestnicy wycieczki: {$id}";
        $wycieczka = getWycieczkaById($id);
        echo "<h3>Uczestnicy wycieczki: {$wycieczka[1]} za cenę: {$wycieczka[4]} zł w dniu: {$wycieczka[2]}</h3>";
        $lista = getAllUczWycieczki($id);
        echo toList($lista);
    }
    ?>
</body>
</html>