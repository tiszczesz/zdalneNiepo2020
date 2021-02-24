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
    public static function deleteArticle(string $title):bool
    {
        return unlink(DIR.'/'.$title);
    }
    public static function getArticleByTitle(string $fileName):Article
    {
        $lines = file(DIR.'/'.$fileName,FILE_IGNORE_NEW_LINES);
        $content = "";
        $a = new Article($fileName);
        foreach($lines as $line){
            $dane = explode("|",$line);
            if($dane[0]==TOOL){
                $a->setTag($dane[1]);
                $a->setStyle($dane[2]);
                $a->setDate(date("d-m-Y H:i:s",filemtime(DIR.'/'.$fileName)));
            }else{
                $content .= $line.PHP_EOL;
            }      
        }
        $a->setContent($content);   
        var_dump($a);     
        return $a; //todo dalej test
        
    }
 }