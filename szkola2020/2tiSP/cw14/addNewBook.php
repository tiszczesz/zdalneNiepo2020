<?php
require_once "functions.php";
if(filter_has_var(INPUT_POST,"title")){
    $title = filter_input(INPUT_POST,"title",FILTER_SANITIZE_STRING);
    $author = filter_input(INPUT_POST,"author",FILTER_SANITIZE_STRING);
    $price = filter_input(INPUT_POST,"price",FILTER_VALIDATE_FLOAT);
    if($title!="" && $author!="" && $price>0){
        insertBook($title,$author,$price);

    }else{
        header("Location: addNewBook.html");
    }

}
header("Location: cw14.php");