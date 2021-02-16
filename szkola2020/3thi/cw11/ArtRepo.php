<?php
require_once "Article.php";
require_once "configuration.php";

class ArtRepo{
    public static function getAll(string $dir=DIR):array
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
        $dir = DIR;
        $f = fopen($dir."/".$a->getTitle(),'w');
        fwrite($f,TOOL.'|'.$a->getTag().'|'.$a->getStyle().PHP_EOL);
        fwrite($f,$a->getContent());
        fclose($f);
    }
 }