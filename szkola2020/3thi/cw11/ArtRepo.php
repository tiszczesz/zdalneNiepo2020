<?php
require_once "Article.php";

class ArtRepo{
    public static function getAll(string $dir="articles"):array
    {
        $data = scandir($dir);
        $arts = [];
        foreach($data as $elem){
            if($elem!=='.' && $elem!=='..'){
                $art = new Article($elem);
                $art->getContentFromFile($dir.'/'.$elem);
                $art->setDate(date("d-m-Y H:i:s",filemtime($dir.'/'.$elem)));
                $arts[] = $art;
            }
        }
        return $arts;
    }
    public static function saveArticle(Article & $a):void
    {
        
    }
 }