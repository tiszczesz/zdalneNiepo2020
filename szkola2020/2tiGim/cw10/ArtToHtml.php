<?php
require_once "Article.php";
class ArtToHtml{
    public static function artToDiv(Article & $a):string
    {
        $html = "<div class='article' style='{$a->getStyle()}'>\n";
        $html .= "<h3>{$a->getTitle()}</h3>\n";
        $html .= "<p>{$a->getContent()}</p>\n";
        if($a->getDate()!=""){
            $html .= "<div class='article-footer'>Utworzono: {$a->getDate()}</div>";
        }
       return $html."<span class='article-tag'>{$a->getTag()}</span></div>\n";
    }
}