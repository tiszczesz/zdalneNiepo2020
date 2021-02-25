<?php
require_once "Post.php";
require_once "configuration.php";

class PostRepo{
    public static function getAllPosts(string $dir = DIR):array
    {
        $dane =  scandir($dir);  
        $posts = [];    
        foreach($dane as $item){
            if($item!='.' && $item!='..'){
                $p = new Post($item);
                $p->contentFromFile($dir.'/'.$item);
                $p->setDate(date("d-m-Y H:i:s",filemtime($dir.'/'.$item)));
                $posts[] = $p;
            }
        }
        return $posts;  
    }
    public static function savePost(Post $p):void
    {
       $f = fopen(DIR.'/'.$p->getTitle(),'w');
       fwrite($f,$p->getContent());
       fclose($f);
    }
    public static function deletePostByTitle(string $fileName):bool
    {
       return unlink(DIR.'/'.$fileName);
    }
    public static function getPostByTitle(string $fileName):Post
    {
        //todo 
    }

}