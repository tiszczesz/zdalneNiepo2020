<?php
require_once "PostRepo.php";
if (filter_has_var(INPUT_POST, 'title')) {
    //todo zmiana zawartosci pliku
    $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
    $content = trim(filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING));
    $p = new Post($title, $content);
    PostRepo::savePost($p);
} 
    header("Location: cw11.php");

