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
       // var_dump($conn);
        $result = $conn->query("SET NAMES utf8");
       // var_dump($result);
        $result2 = $conn->query("SELECT * FROM pracownik");
      //  var_dump($result2);
        // $dane = $result2->fetch_all();
        // var_dump($dane);
        while($row = $result2->fetch_row()){
            //var_dump($row);
            echo "<p>{$row[1]} {$row[2]}</p>";
        }
        $result3 = $conn->query("SELECT count(*) FROM pracownik");
        var_dump($result3);
        $row3 = $result3->fetch_array();
        echo "<p>Ilość pracowników: {$row3[0]}</p>";
        var_dump($row3);
        $conn->close();
    ?>
    <div>
    <a href="insert.php">Wstaw rekord</a>
    </div>
</body>
</html>