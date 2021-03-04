<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw10.css">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "FileRepo.php";
    require_once "HtmlCar.php";
    if(isset($_GET['marka'])){
        $marka = trim($_GET['marka']);
        $result = FileRepo::getByMarka($marka);
        if($result!==null){
            echo HtmlCar::carToForm($result);
            //todo w pliku HtmlCar::carToForm
        }
    }
    ?>
</body>
</html>