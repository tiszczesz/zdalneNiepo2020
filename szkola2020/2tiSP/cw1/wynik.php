<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabliczka mnożenia</title>
    <style>
        table{border-collapse: collapse;margin: 30px;}
        td{text-align: right;padding: 5px;border: solid 1px grey;}
        .wyr{background-color: lightcoral;}
    </style>
</head>
<body>
    <?php
    //var_dump($_POST);
    if(isset($_POST['rows'])){
        require "funmctions.php";
        $rows = intval($_POST['rows']);
        $cols = intval($_POST['cols']);
        $rows = $rows<=0 || $rows>50 ? 20:$rows;
        $cols = $cols<=0 || $cols>50 ? 20:$cols;
        echo generTab($rows,$cols);
    }
    ?>
    <div><a href="cw1.php">Powrót do formularza</a></div>
</body>
</html>