<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw13.css">
    <title>Ćwiczenie 13 - Generator formularzy</title>
</head>
<body>
<h1>Ćwiczenie 13 - Generator formularzy</h1>
    <?php
    require_once "Form.php";
    $fields = ["imie"=>"text","nazwisko"=>"text","wiek"=>"number","dataRejestracji"=>"date"];
    $f1 = new Form($fields,"wynik.php");
    echo $f1->generateForm();

    $fields2 = ["klasa"=>"text","zawód"=>"text","ilość miejsc"=>"number","załącznik"=>"file"];
    $f2 = new Form($fields2,"wynik2.php");
    echo $f2->generateForm();
    ?>
</body>
</html>