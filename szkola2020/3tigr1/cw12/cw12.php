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
        $r2 = $conn->query("SELECT id,title,author,price as 'cena',char_length(title) as 'długosc' FROM filmy ");
        
        var_dump($r2);

    //    $dane = $r2->fetch_all();
    //     var_dump($dane);

        // while($row = $r2->fetch_row()){
        //     var_dump($row);
        // }
        // while($row = $r2->fetch_array()){
        //     var_dump($row);
        // }
        while($row = $r2->fetch_assoc()){
            var_dump($row);
        }
        
        $sql2 = "SELECT round(avg(price),2) as 'średnia cena' FROM filmy";
        $r3 = $conn->query($sql2);
       // var_dump($r3->fetch_row());

        echo "<div>Średnia cena za filmy: {$r3->fetch_row()[0]} zł</div>";
        //close
        $conn->close();
    ?>
    <div>
        <a href="addNew.php">Dodaj nowy film</a>
    </div>
    <div>
        <a href="delete.php">usuń film/y film</a>
    </div>
</body>
</html>