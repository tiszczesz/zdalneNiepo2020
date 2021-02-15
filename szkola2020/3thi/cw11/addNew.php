<?php
require_once "ArtRepo.php";
//var_dump($_POST);
if(isset($_POST['title'])){
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    $tag = trim($_POST['tag']);
    $style = trim($_POST['style']);
    if($title!=='' && $content!==''){
       
        $a = new Article($title,$content,"",$tag,$style);
        ArtRepo::saveArticle($a);
       // header("Location: cw11.php");
    }else{
        header("Location: addNew.html");
    }
}else{
    header("Location: addNew.html");
}