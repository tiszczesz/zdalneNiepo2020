<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_FILES['plik'])){
        $kat = __DIR__."\uploads\\";
        $target_file = $kat. basename($_FILES['plik']['name']);
      //  var_dump($target_file);
      $isOk = true;
      $sprawdz = getimagesize($_FILES['plik']['tmp_name']);
      $imType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      if($sprawdz!==false){
        //  var_dump($sprawdz);
          echo "<div>To jest obrazek {$sprawdz['mime']}</div>";
          $isOk = true;
      }else{
        echo "<div>To nie jest obrazek </div>";
        $isOk = false;
      }
      if(file_exists($target_file)){
          echo "<div>Taki plik już istnieje!!!!</div>";
          $isOk = false;
      }
      if($_FILES['plik']['size']> 500000){
          echo "<div>Zbyt duży plik !!!</div>";
          $isOk = false;
      }
      if($imType != "jpeg" && $imType!="png" && $imType!="jpg" && $imType!="gif"){
          echo "<div>Zły rozszerzenie pliku!!!</div>";
          $isOk = false;
      }
      if($isOk==false){
          echo "<div>Błąd załadowania pliku!!!</div>";
      }else{
          if(move_uploaded_file($_FILES['plik']['tmp_name'],$target_file)){
              echo "<div>Plik został wczytany: "
                 .htmlspecialchars(basename($_FILES['plik']['name']))."</div>";
          }else{
              echo "<div>ERROR!!!!</div>";
          }
      }

       // var_dump($imType);
    }
   // var_dump($_FILES);
    ?>
</body>
</html>