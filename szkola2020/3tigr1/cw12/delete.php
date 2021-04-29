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
    $conn = new mysqli("localhost","root",null,"3ti_gr1_cw1");
    //var_dump($conn);
    if($conn->connect_errno!==0){
        echo $conn->connect_error."<br>";
        die("ERROR Db!!!");
    }
    echo "<p>Jest OK</p>";
   // $conn->set_charset("utf8");
    $r = $conn->query("SET NAMES utf8");

    $sqlDelete = "DELETE FROM filmy WHERE title like 'TEST'";
    $r = $conn->query($sqlDelete);
    if($r){
        echo "<div>Usunięto rekord/y</div>";
    }else{
        echo "<div>Błąd przy usunięciu rekordu</div>";
    }
    $conn->close();
?>
</body>
</html>