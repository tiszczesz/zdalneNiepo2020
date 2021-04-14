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
     $conn = new mysqli("localhost", "root", null, "2tigim_cw1");
     var_dump($conn);
     if ($conn->connect_errno != 0) {
         echo $conn->connect_error . "<br>";
         die("Error DB"); //koniec
     }
     echo "<p>Dalej</p>";
     $result1 = $conn->set_charset("utf8"); //typowe dla mysqli

     $dane = ["Anna","Małecka","wwm@example.pl"];
     $sqlInsert = "INSERT INTO contacts(firstName,lastName,email) VALUES('{$dane[0]}','{$dane[1]}','{$dane[2]}')";
     $r2 = $conn->query($sqlInsert);

     if($r2){
         echo "Zapisano do bazy danych";
     }
     $conn->close();
    ?>
</body>
</html>