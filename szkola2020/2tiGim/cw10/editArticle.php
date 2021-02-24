<?php
require_once "RepoArticles.php";
if(filter_has_var(INPUT_POST,'title')){
    //echo "OK post";
    $title = trim(filter_input(INPUT_POST,'title',FILTER_SANITIZE_STRING));
    $content = trim(filter_input(INPUT_POST,'content',FILTER_SANITIZE_STRING));
    var_dump($content);
    if($title!=='' && $content!==''){
        $article = new Article($content,$title);
       // var_dump($article);
        RepoArticles::saveArticle($article);
        header("Location: cw10.php");
    }else{
        header("Location: edit.php");
    }
    //var_dump($title);
}else{
    header("Location: edit.php");
}