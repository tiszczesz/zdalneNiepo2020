<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw10.css">
    <title>Document</title>
</head>
<body>
<h1>Dodawanie nowego postu</h1>
    <?php
    require_once "PostToHtml.php";
    echo PostToHtml::PostToForm();
    ?>
</body>
</html>