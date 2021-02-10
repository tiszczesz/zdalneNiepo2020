<?php
require_once "Article.php";
class ArtToHtml{
    public static function artToDiv(Article & $a):string
    {
        $html = "<div class='article' style='{$a->getStyle()}'>\n";
        $html .= "<h3>{$a->getTitle()}</h3>\n";
        $html .= "<p>{$a->getContent()}</p>\n";
        $html .= "<div class='article-other'>\n";
         if(trim($a->getTag())!=''){
            $html .= "<div class='article-tag'>{$a->getTag()}</div>\n";
        }
        if($a->getDate()!=""){
            $html .= "<div class='article-footer'>Utworzono: {$a->getDate()}</div>";
        }
       
       return $html."<div><a class='article-btn' href='edit.php?title={$a->getTitle()}'>Edytuj</a>".
       "<a class='article-btn' href='delete.php?title={$a->getTitle()}'>Usuń</a></div></div>\n</div>\n";
    }
    public static function articleToForm(Article& $a=null)
    {
        //todo
    }
}