<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cw3.css">
</head>
<body>
    <?php
    $dane = file("rejestracja.txt",FILE_IGNORE_NEW_LINES);
   // var_dump($dane);
    echo "<table>";
    echo "<tr><th>Login</th><th>Data</th><th>Funkcja</th><th>Zarządzanie</th></tr>";
    foreach($dane as $k=>$line){        
        $row = explode('|',$line);
        echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td>".
          "<td><a href='delete.php?id={$k}'>Usuń</a> <a href='edit.php?id={$k}'>Edytuj</a></td></tr>\n";
    }
    
    echo "<ol>";

    echo "</ol>";
    ?>
</body>
</html>