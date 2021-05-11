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
    
   // var_dump($conn);
    if($conn->connect_errno!=0){
        echo $conn->connect_error."<br>";
        die("ERROR DB!!!!");
    }
    echo "<p>Połączona z bazą danych</p>";
    $r1 = $conn->set_charset("utf8");// wykonane poprzez mysqli
  //  var_dump($r1);
    // $r2 = $conn->query("SET NAMES utf8"); //wykonaie zapytanie sql
    // var_dump($r2);
    $r3 = $conn->query("SELECT id,title,author,price as 'cena' FROM books WHERE price>20");
    
   
  //  var_dump($r3);
    // $dane = $r3->fetch_all();
    // var_dump($dane);
    // while( $row1 = $r3->fetch_row()){
    //     var_dump($row1);
    // }
    $sum = 0;
//     while( $row1 = $r3->fetch_assoc()){
//         var_dump($row1);
//         $sum += $row1['cena'];
//     }
    
//    echo "<div>Cena całkowita: {$sum}</div>";
    //     while( $row1 = $r3->fetch_array()){
    //     var_dump($row1);
    //     $sum += $row1['cena'];
    // }
     while( $row1 = $r3->fetch_object()){
        var_dump($row1);
        //$sum += $row1['cena'];
    }
    $sql = "SELECT min(price) as 'Min_Price' FROM books";
    $r4 = $conn->query($sql);
  //  var_dump($r4);
    //var_dump($r4->fetch_row());
    echo "<div>Najtańsza książka: ".$r4->fetch_row()[0]."</div>";
    $conn->close();
    ?>
    <div><a href="addNew.php">Dodaj książkę domyślną</a></div>
    <div><a href="delete.php">Usuń zbędne książki</a></div>
</body>
</html>