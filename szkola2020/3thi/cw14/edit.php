<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $conn = new mysqli("localhost", "root", null, "3thi_cw1");
    // var_dump($conn);
    if ($conn->connect_errno !== 0) {
        echo $conn->connect_error . "<br>";
        die("ERROR Db");
    }
    echo "<p>Wszystko OK z Db</p>";
    //$conn->set_charset("utf8");

    $r = $conn->query("SET NAMES utf8");

    $sqlInsert = "UPDATE persons SET firstName='TESTOWY_NOWY' WHERE firstName like 'TEST'";
    $r2 = $conn->query($sqlInsert);
    if ($r2 == true) {
        echo "<div>Zapisano do bazy</div>";
    } else {
        echo "<div>Nie zapisano do bazy</div>";
    }
    $conn->close();
    ?>
</body>

</html>