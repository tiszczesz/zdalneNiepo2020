<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .car-info{padding: 10px; background-color: lightsalmon;color:brown;margin: 20px 30px;}
    </style>
    <title>Document</title>
</head>
<body>
    <?php
    require_once "Car.php";
    for($i=0;$i<2;$i++){
        $c1 = new Car();
            echo $c1;
    }
   
    ?>
</body>
</html>