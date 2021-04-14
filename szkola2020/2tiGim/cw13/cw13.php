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
    $conn = new mysqli("localhost", "root", null, "2tigim_cw1");
    var_dump($conn);
    if ($conn->connect_errno != 0) {
        echo $conn->connect_error . "<br>";
        die("Error DB"); //koniec
    }
    echo "<p>Dalej</p>";
    $result1 = $conn->set_charset("utf8"); //typowe dla mysqli

    //$result2 = $conn->query("SET NAMES utf8");  // bezposrednio w sql

    var_dump($result1);

    $selectResult = $conn->query("SELECT firstName AS imie,lastName FROM contacts");

    var_dump($selectResult);
    // $data = $selectResult->fetch_all();
    // var_dump($data);
    // while($row = $selectResult->fetch_array()){
    //     var_dump($row);
    // }
    // while ($row = $selectResult->fetch_assoc()) {
    //     var_dump($row);
    // }
    while ($row = $selectResult->fetch_row()) {
       echo "<p>{$row[0]}  {$row[1]}</p>";
    }

    $conn->close();

    ?>
<div>   
<a href="insert.php">Wstaw nowy rekord</a>
</div>
 
</body>

</html>