<?php
require_once "PostRepo.php";
if(isset($_GET['title'])){
    $title = $_GET['title'];
    PostRepo::deletePostByTitle($title);
}
header("Location: cw10.php");