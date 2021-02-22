<?php
require_once "RepoArticles.php";
if(filter_has_var(INPUT_GET,'title')){ //isset($_GET['title'])
    $title = filter_input(INPUT_GET,'title',FILTER_SANITIZE_STRING);
    RepoArticles::deleteArticle($title);
    //echo "usuwanie pliku: ".$title;

}
    
header("Location: cw10.php");