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
        $conn = new mysqli("localhost","root",null,"3thi_cw1");
       // var_dump($conn);
        if($conn->connect_errno!==0){
            echo $conn->connect_error."<br>";
            die("ERROR Db");
        }
        echo "<p>Wszystko OK z Db</p>";

    ?>
</body>
</html>