<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <div class="line">
            <label for="rows"></label>
            <input type="number" name="rows" id="rows">
        </div>
        <div class="line">
            <label for="cols"></label>
            <input type="number" name="cols" id="cols">
        </div>
        <input type="submit" value="Generuj">
    </form>

    <div>
    <?php
    require "functions.php";
        if(isset($_POST['rows'])){
            $rows = intval($_POST['rows']);
            $cols = intval($_POST['cols']);
            echo generTab($rows,$cols);
        }
    ?>
    </div>
</body>

</html>