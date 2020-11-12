<?php
//var_dump($_GET);
require "functions.php";
if(isset($_GET['id'])){
   $dane = getAll("lista.txt");
   $id = intval($_GET['id']);
    unset($dane[$id]);
    saveAll("lista.txt",$dane);
    header("Location: lista.php");
}