<?php
require_once "ArtRepo.php";
if(isset($_GET['title'])){
    $title = trim($_GET['title']);
    ArtRepo::deleteArticle($title);
   
}
    header("Location: cw11.php");
