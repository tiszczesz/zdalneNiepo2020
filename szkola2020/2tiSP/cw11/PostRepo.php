<?php
require_once "Post.php";
require_once "configuration.php";
class PostRepo{
    public static function getAllPosts(string $dir=DIR):array {
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
    public static function savePost(Post& $p):void
    {
        $f = fopen("articles/".$p->getTitle(),'w');
        fwrite($f,$p->getContent());
        fclose($f);
    }
    public static function deletePostByTitle(string $title):void
    {
        $dir = DIR;
        $fileName = $dir.'/'.$title;
        var_dump($fileName);
        if(file_exists($fileName)){
            echo "W ifie";
            unlink($dir.'/'.$title);
        }
    }
}