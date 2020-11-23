<?php

//var_dump($_POST);
require "functions.php";
if(isset($_POST['id'])){
    $id = intval($_POST['id']);
    $imie = trim($_POST['imie']);
    //$na = trim($_POST['na']);
    $data = trim($_POST['data']);
    $item = trim($_POST['item']);
    $dane = getFromFile("lista.txt");
    var_dump($dane);
    $dane[$id] = $imie.'|'.$data.'|'.$item;
    saveAllToFile("lista.txt",$dane);
}
header("Location: lista.php");