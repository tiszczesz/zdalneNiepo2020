<?php
require_once "Article.php";
require_once "configuration.php";
class RepoArticles{
    public static function getAll(string $dir=DIR):array {
        $result = scandir($dir);
        $articles = [];
        foreach($result as $art){
            if($art!=='.' && $art!=='..'){
                $a = self::getArticleByTitle($art); //wywolanie metody statycznej w metodzie tez statycznej             
                $articles[] = $a;
            }
        }
        return $articles;
    }
    public static function saveArticle(Article & $a):void
    {
        $dir = DIR;
       // var_dump("rrrrrrrrr");
       // if(file_exists($dir.'/'.$a->getTitle())) return;
        $plik = fopen($dir.'/'.$a->getTitle(),'w');
        
        fwrite($plik,$a->getContent());
        fclose($plik);
    }
    public static function getByTitle(string $title):Article{
        $dir = DIR;
        if(file_exists($dir.'/'.$title)){
            $a = new Article($title);
            $a->setDate(date("d-m-Y H:i:s",filemtime($dir.'/'.$title)));
            return $a;
        }else{
            return null;
        }
    }
    public static function deleteArticle(string $fileName):bool
    {
        return unlink(DIR.'/'.$fileName);
    }
    public static function getArticleByTitle(string $title):Article
    {
        $a = new Article("",$title);
        $a->getContentFromFile(DIR.'/'.$title);
        $a->setDate(date("d-m-Y H:i:s",filemtime(DIR.'/'.$title)));               
        return $a;
    }
    
}