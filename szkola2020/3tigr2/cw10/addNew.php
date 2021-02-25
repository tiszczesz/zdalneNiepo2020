<?php
require_once "PostRepo.php";
if(isset($_POST['title'])){
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    if($title!='' && $content!=''){
        $post = new Post($title);
        $post->setContent($content);
        PostRepo::savePost($post);
    }
}
    header("Location: cw10.php");


