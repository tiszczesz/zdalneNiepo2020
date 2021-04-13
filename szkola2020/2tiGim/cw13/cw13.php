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
        if($conn->connect_errno!=0) {
            echo $conn->connect_error."<br>";
            die("Error DB");
        }
        echo "<p>Dalej</p>";
        $result1 = $conn->set_charset("utf8"); //typowe dla mysqli

        //$result2 = $conn->query("SET NAMES utf8");  // bezposrednio w sql

        var_dump($result1);

        $selectResult = $conn->query("SELECT * FROM contacts where firstName like '%a'");

        var_dump($selectResult);

        $conn->close();

    ?>
</body>
</html>