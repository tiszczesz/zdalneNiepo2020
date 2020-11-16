<?php

require "functions.php";
if(isset($_GET['id'])){
    $id=intval($_GET['id']);
    //echo "usuawamy element o id {$id}";
    $dane = getFromFile("lista.txt");
    //var_dump($dane);
    unset($dane[$id]);
    saveAllToFile("lista.txt",$dane);
       
    header("Location: lista.php");
}