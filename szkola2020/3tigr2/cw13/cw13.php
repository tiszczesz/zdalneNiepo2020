<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ćwiczenie 13 - bazy wstęp</title>
</head>
<body>
    <h1>ćwiczenie 13 - bazy wstęp</h1>
    <?php
        $conn = new mysqli("localhost","root",null,"kl3ti_gr2_cw2");
        var_dump($conn);
        $result = $conn->query("SET NAMES utf8");
        var_dump($result);
        $result2 = $conn->query("SELECT Imie,Nazwisko FROM pracownik");
        var_dump($result2);

        $conn->close();
    ?>
</body>
</html>