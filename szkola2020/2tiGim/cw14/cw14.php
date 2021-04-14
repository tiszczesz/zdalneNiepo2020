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
<!-- todo aplikacja CR(U)D -->
    <h1>Ćwiczenie 14 mysqli - c.d.</h1>
    <?php
    require_once "functions.php";
    
    $dane = getAll();
    echo daneToHTML($dane);
    ?>

 
</body>

</html>