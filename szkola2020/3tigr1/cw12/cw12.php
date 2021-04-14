<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ćwiczenie 12 - mysqli wstęp</title>
</head>
<body>
    <h1>Ćwiczenie 12 - mysqli wstęp</h1>
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
        var_dump($r);
        $r2 = $conn->query("SELECT * FROM filmy WHERE price>100");
        var_dump($r2);
        //close
        $conn->close();
    ?>
</body>
</html>