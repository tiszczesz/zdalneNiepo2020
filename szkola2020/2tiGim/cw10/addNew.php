<?php
require_once "RepoArticles.php";
if(filter_has_var(INPUT_POST,'title')){
    //echo "OK post";
    $title = trim(filter_input(INPUT_POST,'title',FILTER_SANITIZE_STRING));
    $content = trim(filter_input(INPUT_POST,'content',FILTER_SANITIZE_STRING));
    
    if($title!=='' && $content!==''){
        $article = new Article($content,$title);
        RepoArticles::saveArticle($article);

    }
    //var_dump($title);
}else{
    header("Location: addNew.html");
}