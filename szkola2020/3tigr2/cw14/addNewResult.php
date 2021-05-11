<?php
require_once "functions.php";
if(isset($_POST['imie'])){
    $imie = trim($_POST['imie']);
    $nazwisko = trim($_POST['nazwisko']);
    $dzial = intval($_POST['dzial']);
    if($imie!='' && $nazwisko!='' && $dzial!=0){
        insertWorker($imie,$nazwisko,$dzial);
    }

    
}