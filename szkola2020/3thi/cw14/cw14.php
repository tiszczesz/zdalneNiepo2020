<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ćwiczenie 14 - mysqli wstęp</title>
</head>

<body>
    <h1>Ćwiczenie 14 - mysqli wstęp</h1>
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

    // var_dump($r);
    $r2 = $conn->query("SELECT * FROM persons");
    // var_dump($r2);

    // $row = $r2->fetch_all();
    //    while($row = $r2->fetch_array()){
    //        var_dump($row);
    //    }
    // while ($row = $r2->fetch_assoc()) {
    //     var_dump($row);
    // }
    while ($row = $r2->fetch_row()) {
        var_dump($row);
    }
    $sql2 = "SELECT count(*) as ilosc FROM persons";
    $r3 = $conn->query($sql2);
    //var_dump($r3->fetch_assoc());
    echo "<div>{$r3->fetch_assoc()['ilosc']}</div>";
    $conn->close();
    ?>
    <div>
        <a href="addNew.php">Dodaj nowy rekord</a>
    </div>
    <div>
        <a href="delete.php">Usuwanie rekordów</a>
    </div>
    <div>
        <a href="edit.php">Edytowanie rekordów</a>
    </div>
</body>

</html>