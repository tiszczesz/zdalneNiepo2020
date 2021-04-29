<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="cw14.css">
    <title>Ćwiczenie 13 mysqli - wstęp</title>
</head>

<body>
<!-- todo aplikacja CR(U)D -->
<div class="container">
    <h1>Ćwiczenie 14 mysqli - c.d.</h1>
    <?php
    require_once "functions.php";
    
    $dane = getAll();
    echo daneToTable($dane);


    ?>
    <div>
        <a class="btn btn-secondary p-3" href="addNew.html">Dodaj nowy rekord</a>
    </div>
</div>
    
 
</body>

</html>