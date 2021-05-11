<?php
require_once "functions.php";
var_dump($_POST);
if(filter_has_var(INPUT_POST,'imie')){   //if(isset($_POST['....']))
   $imie = trim(filter_input(INPUT_POST,'imie',FILTER_SANITIZE_STRING));
   $nazwisko = trim(filter_input(INPUT_POST,'nazwisko',FILTER_SANITIZE_STRING));
   $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
   //$email = filter_var(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
     var_dump($email);      
   if($imie!='' && $nazwisko!='' && $email){
       $result = insertNew([$imie,$nazwisko,$email]);
   }
   header("Location: cw14.php");
}else {
    header("Location: cw14.php");
}