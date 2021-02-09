<?php
require_once "Post.php";
class PostRepo{
    public static function getAllPosts(string $dir="articles"):array {
        $all = scandir($dir);
        $posts = [];
        foreach($all as $item){
            if($item!='.' && $item!='..'){
                $p = new Post($item);
                $p->setContentFromFile($dir."/".$item);
                $p->setDate(date("d-m-Y H:i:s",filemtime($dir."/".$item)));
                $posts[] = $p;
            }
        }
        return $posts;
    }
}