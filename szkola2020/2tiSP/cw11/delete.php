<?php
require_once "PostRepo.php";
if(filter_has_var(INPUT_GET,'title')){
    $title = trim(filter_input(INPUT_GET,'title',FILTER_SANITIZE_STRING));
   // echo "usuwanie pliku: {$title}";
   PostRepo::deletePostByTitle($title);
    
}
header("Location: cw11.php");