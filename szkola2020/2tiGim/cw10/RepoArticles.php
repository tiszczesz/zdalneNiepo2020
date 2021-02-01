<?php
class RepoArticles{
    public static function getAll(string $dir="articles"):array {
        $result = scandir($dir);
        $articles = [];
        foreach($result as $art){
            if($art!=='.' && $art!=='..'){
                $a = new Article("",$art);
                $a->getContentFromFile($dir.'/'.$art);
                $a->setDate(date("d-m-Y H:i:s",filemtime($dir.'/'.$art)));
                $articles[] = $a;
            }
        }
        return $articles;
    }
}