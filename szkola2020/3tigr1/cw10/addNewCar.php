<?php
require_once "FileRepo.php";
//todo zapis do pliku porzez nieistniejącą funkcję FileRepo::saveCar($c);
if(isset($_POST['marka'])){
    //todo pobranie danych i utworzenie obiektu car
    
    $marka = trim($_POST['marka']);
    $miejsca = intval($_POST['miejsca']);
    $rokProdukcji = intval($_POST['rokProdukcji']);
    $cena = floatval($_POST['cena']);
    $c = new Car($marka,$miejsca,$rokProdukcji,$cena);
    FileRepo::saveCar($c);
    header("Location: cw10.php");
}else{
    header("Location: cw10.php");
}
