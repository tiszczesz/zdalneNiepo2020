<?php
require_once "ArtRepo.php";
if(isset($_POST['title'])){
    $title = $_POST['title'];
    $content = trim($_POST['content']);
    $tag = trim($_POST['tag']);
    $style = trim($_POST['style']);
    $a = new Article($title,$content,"",$tag,$style);
    //var_dump($a);
    ArtRepo::saveArticle($a);    
}
header("Location: cw11.php");