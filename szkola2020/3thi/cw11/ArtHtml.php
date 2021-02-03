<?php
class ArtHtml{
    public static function ArticleToDiv(Article $a):string
    {
        $html = "<div class='article'>\n";
        $html .= "<h3>{$a->getTitle()}</h3>";
        $html .= "<div style='{$a->getStyle()}'>{$a->getContent()}</div>";
        if(trim($a->getDate())!=''){
            $html .= "<div class='article-date'>{$a->getDate()}</div>";
        }
        return $html."</div>\n";
    }
}