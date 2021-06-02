<?php
//var_dump($_POST);
require_once "functions.php";
if(isset($_POST['firstName'])){
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $phone = trim($_POST['phone']);
    if($firstName!="" && $lastName!="" && $phone!=""){
        addNewContact($firstName,$lastName,$phone);
    }
}