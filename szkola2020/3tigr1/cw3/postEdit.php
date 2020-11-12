<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    var_dump($_POST);
    if(isset($_POST['id'])){
        $id = intval($_POST['id']);
        $lines = file("rejestracja.txt",FILE_IGNORE_NEW_LINES);       
        $dane = [];
        foreach($lines as $line){
            $dane[] = explode('|',$line);
        }
        //var_dump($dane[$id]); 
        $dane[$id]=[trim($_POST['login']),trim($_POST['data']),trim($_POST['fun'])];
        $plik = fopen("rejestracja.txt",'w');
        if($plik){
            foreach($dane as $line){
                fwrite($plik,implode('|',$line).PHP_EOL);
            }
            fclose($plik);
           // echo "OK";
        }
        header("Location: admin.php");
    }
    ?>
</body>
</html>