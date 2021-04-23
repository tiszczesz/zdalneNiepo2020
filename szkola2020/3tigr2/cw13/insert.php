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
         $conn = new mysqli("localhost","root",null,"kl3ti_gr2_cw2");
         // var_dump($conn);
         if($conn->connect_errno!=0){
             die("ERROR DB");
         }
          $result = $conn->query("SET NAMES utf8");

         $sqlInsert = "INSERT INTO pracownik(Imie,Nazwisko,Dzial_id) VALUES ('Adam','Nowak',1)";
         $result = $conn->query($sqlInsert);
         var_dump($result);
          $conn->close();
    ?>
</body>
</html>