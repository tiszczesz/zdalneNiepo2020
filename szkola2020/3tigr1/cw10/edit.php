<?php
require_once "FileRepo.php";
var_dump($_POST);
if(isset($_POST['marka'])){
    $marka = trim($_POST['marka']);
    $miejsca = intval($_POST['miejsca']);
    $rokProdukcji = intval($_POST['rokProdukcji']);
    $cena = floatval($_POST['cena']);
    $oldMarka = $_POST['oldMarka'];

    $c = new Car($marka,$miejsca,$rokProdukcji,$cena);

    FileRepo::updateCar($c,$oldMarka);

}
header("Location: admin.php");