<?php
require_once "PostRepo.php";
if(filter_has_var(INPUT_POST,'title')){ //if(isset($_POST['title')]){.....})
    $title = trim(filter_input(INPUT_POST,'title',FILTER_SANITIZE_STRING));
    $content = trim(filter_input(INPUT_POST,'content',FILTER_SANITIZE_STRING));
    var_dump($title);
    var_dump($content);
    $p = new Post($title,$content);
    PostRepo::savePost($p);
    header("Location: cw11.phpl");
}else{
   header("Location: addNew.html");
}