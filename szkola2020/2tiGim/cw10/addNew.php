<?php
require_once "RepoArticles.php";
if(filter_has_var(INPUT_POST,'title')){
    //echo "OK post";
    $title = trim(filter_input(INPUT_POST,'title'));
}else{
    echo "niestety GET";
}