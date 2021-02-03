<?php
require_once "Post.php";
class PostToHtml{
    public static function postToDiv(Post $p):string {
        $html=<<<TEXT
        <div style='{$p->getStyle()}'>
            <div class='article-title'>{$p->getTitle()}</div>
            <div class='article-content'>{$p->getContent()}</div>
            <div class='article-date'>{$p->getDate()}</div>
        </div>
TEXT;
      //  var_dump($html);
        return $html;
    }

}