<?php
class ArtHtml
{
    public static function ArticleToDiv(Article $a): string
    {
        $html = "<div class='article'>\n";
        $html .= "<h3>{$a->getTitle()}</h3>";
        $html .= "<div style='{$a->getStyle()}'>{$a->getContent()}</div>";
        $html .= "<div class='article-other'>\n";
        $tag = trim($a->getTag()) != ""
            ? "<div class='article-tag'>{$a->getTag()}</div>\n" :
            "";
        if (trim($a->getDate()) != '') {
            $html .= "{$tag}<div class='article-date'>{$a->getDate()}</div>\n";
        }

        return $html . "</div>\n</div>\n";
    }
}
