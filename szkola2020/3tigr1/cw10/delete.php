<?php
require_once "FileRepo.php";
if(isset($_GET['marka'])){
    echo "usuwanie samochodu";
    $marka = trim($_GET['marka']);
    $cars = FileRepo::getAll(FILENAME);
    $result = -1;
    for($i=0; $i<count($cars);$i++){
        if($cars[$i]->getMarka()===$marka){
            $result = $i;
            break;
        }
    }
   // var_dump($cars);
    if($result!=-1) unset($cars[$result]);
   // var_dump($cars);
   FileRepo::saveAll($cars,FILENAME);
    
}
header("Location: admin.php");