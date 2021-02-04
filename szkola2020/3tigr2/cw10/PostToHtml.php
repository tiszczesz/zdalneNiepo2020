<?php
require_once "Post.php";
class PostToHtml{
    public static function postToDiv(Post $p):string {
        $style = $p->getStyle()==='' ? "" : "style='{$p->getStyle()}'";        
        $html = "<div class='post' {$style}>";
        $html .= "<div class='post-title'>{$p->getTitle()}</div>\n";
        $html .= "<div class='post-content'>{$p->getContent()}</div>\n";
        if(trim($p->getDate())!==''){
            $html .= "<div class='post-date'>{$p->getDate()}</div>";
        }
        if(trim($p->getTag()!=='')){
            $html .= "<div class='post-tag'>{$p->getTag()}</div>\n";
        }
        return $html."</div>\n";
    }
}