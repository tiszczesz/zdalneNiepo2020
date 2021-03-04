<?php
require_once "PostRepo.php";
if(isset($_POST['title'])){
   // echo "Metoda po submit";
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $p = new Post($title,$content);
    PostRepo::savePost($p);
}
header("Location: cw10.php");
