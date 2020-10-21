<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ćwiczenie 1</title>
    <style>
        .line{margin: 20px;}
        label{display: inline-block;width: 150px;text-align: right;}
        table{border-collapse: collapse;margin: 30px 20px;}
        td{border:solid 1px brown;padding: 6px;text-align: right;}
        .wyr{background-color: lightblue;color: blue;}
    </style>
</head>
<body>
    <h1>Ćwiczenie 1</h1>
    <div class="main">
        <form  method="post">
            <div class="line">
                <label for="rows">Podaj ilość wierszy: </label>
                <input type="number" name="rows" id="rows">
            </div>
            <div class="line">
                <label for="cols">Podaj ilość kolumn: </label>
                <input type="number" name="cols" id="cols">
            </div>
            <div class="line">
                <input type="submit" value="Generuj tabelkę">
            </div>
        </form>
    </div>
    <div id="wynik">
        <?php
        require "functions.php";
        var_dump($_POST);
        if(isset($_POST['rows'])){
            $rows = intval($_POST['rows']);
            $cols = intval($_POST['cols']);
            $rows = $rows<=0 || $rows>50 ? 20: $rows;
            $cols = $cols<=0 || $cols>50 ? 20: $cols;
            //echo " rows: {$rows} cols: {$cols}";
            echo generTab($rows,$cols);
        }
        ?>
        <!-- tiszczesz@gmail.com -->
    </div>
</body>
</html>