<?php
require_once "PostRepo.php";
if(filter_has_var(INPUT_POST,'title')){
 //todo zmiana zawartosci pliku
 PostRepo::savePost()
}else{
    header("Location: cw11.php");
}