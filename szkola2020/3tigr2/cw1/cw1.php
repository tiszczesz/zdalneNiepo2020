<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ćwiczenie 1</title>
    <style>
        .line{margin: 20px 30px;}
        label{display: inline-block;width: 160px;text-align: right;}
        input[type=submit]{width: 150px;padding: 10px;margin-left: 170px;}
        table{border-collapse: collapse;margin: 30px;}
        td{border: solid 1px lightseagreen;text-align: right;padding: 6px;}
        .wyr{background-color: darkblue;color: lightblue;}
    </style>
</head>

<body>
    <h1>ćwiczenie 1</h1>
    <div>
        <form method="post">
            <div class="line">
                <label for="rows">Podaj ilość wierszy: </label>
                <input type="number" name="rows" id="rows">
            </div>
            <div class="line">
                <label for="cols">Podaj ilość kolumn: </label>
                <input type="number" name="cols" id="cols">
            </div>
            <input type="submit" value="Utwórz">
        </form>
    </div>

    <div>
        <?php
        require "functions.php";
        //var_dump($_POST);
        if(isset($_POST['rows'])){
            $rows = intval($_POST['rows']);
            $cols = intval($_POST['cols']);
           // echo "rows: {$rows} cols: {$cols}";
            $rows = $rows <=0 || $rows>50 ? 20 : $rows;
            $cols = $cols <=0 || $cols>50 ? 20 : $cols;
            echo generTab($rows,$cols);
        }
        ?>
    </div>
</body>

</html>