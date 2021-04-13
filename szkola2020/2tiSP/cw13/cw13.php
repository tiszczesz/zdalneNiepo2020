<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ćwiczenie 13 - bazy wstęp</title>
</head>
<body>
    <h1>Ćwiczenie 13 - bazy wstęp</h1>
    <?php
    $conn =  new mysqli("localhost","root",null,"2tisp_cw1");
    
    var_dump($conn);
    if($conn->connect_errno!=0){
        echo $conn->connect_error."<br>";
        die("ERROR DB!!!!");
    }
    echo "<p>Połączona z bazą danych</p>";
    $r1 = $conn->set_charset("utf8");// wykonane poprzez mysqli
    var_dump($r1);
    // $r2 = $conn->query("SET NAMES utf8"); //wykonaie zapytanie sql
    // var_dump($r2);
    $r3 = $conn->query("SELECT * FROM books WHERE price>20");
   
    var_dump($r3);
    $conn->close();
    ?>
</body>
</html>