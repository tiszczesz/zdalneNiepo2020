<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw13.css">
    <title>Ćwiczenie 13 mysqli - wstęp</title>
</head>
<body>
    <h1>Ćwiczenie 13 mysqli - wstęp</h1>
    <?php
        $conn = new mysqli("localhost","root",null,"2tigim_cw1");
        var_dump($conn);
    ?>
</body>
</html>