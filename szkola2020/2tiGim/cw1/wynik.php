<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{border-collapse: collapse;margin: 40px;}
        td{border: solid 1px green;padding: 8px;text-align: right;}
        .wyr{background-color: lightgreen;color:darkgreen;}
    </style>
</head>
<body>
    <?php
    require "functions.php";
    //var_dump($_POST);
    if(isset($_POST['rows'])){
        $rows = intval($_POST['rows'])<0 || intval($_POST['rows'])>50 ? 20:intval($_POST['rows']) ;
        $cols = intval($_POST['cols'])<0 || intval($_POST['cols'])>50 ? 20:intval($_POST['cols']) ;
        echo generTab($rows,$cols);
    }

?>
</body>
</html>