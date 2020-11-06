    <?php
    var_dump($_GET['id']);
     $dane = file("rejestracja.txt",FILE_IGNORE_NEW_LINES);
     if($_GET['id']){
         $id = intval($_GET['id']);
        unset($dane[$id]);
        $plik = fopen("rejestracja.txt",'w');
        if($plik){
            foreach($dane as $line){
                fwrite($plik,$line.PHP_EOL);
            }
            fclose($plik);
           // echo "OK";
        }
        header("Location: admin.php");
     }
