<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ćwiczenie 2 - pliki 1</title>
</head>
<body>
    <h1>Ćwiczenie 2 - pliki 1</h1>
    <?php
        $f = fopen("dane.txt","r");
       // var_dump($f);
       if($f){
        while($line=fgets($f)){
            echo "<div>{$line}</div>\n";
        }
        if(feof($f)){
            echo "<div>Plik odczytany w całości</div>";
        }
        fclose($f);
       }
       $f = fopen("wynik.txt",'a');
       if($f){
           fwrite($f,"ala ma kota małego!!!!!!".PHP_EOL);
           fclose($f);
       }
    ?>
</body>
</html>