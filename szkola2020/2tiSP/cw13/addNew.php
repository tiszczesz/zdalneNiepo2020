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
     $conn =  new mysqli("localhost","root",null,"2tisp_cw1");
    
     // var_dump($conn);
      if($conn->connect_errno!=0){
          echo $conn->connect_error."<br>";
          die("ERROR DB!!!!");
      }
      echo "<p>Połączona z bazą danych</p>";
      $r1 = $conn->set_charset("utf8");// wykonane poprzez mysqli


      $sqlInsert = "INSERT INTO books(title,author,price) VALUES ('Test','Test',56.00)";
      $r1 = $conn->query($sqlInsert);

      var_dump($r1);

      $conn->close();

    ?>
</body>
</html>