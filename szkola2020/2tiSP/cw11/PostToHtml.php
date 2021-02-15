<?php
require_once "Post.php";
class PostToHtml{
    public static function postToDiv(Post $p):string {
        $tag = trim($p->getTag())!='' ? "<div class='article-tag'>{$p->getTag()}</div>": "";
        $html=<<<TEXT
        <div style='{$p->getStyle()}' class='article'>
            <div class='article-title'>{$p->getTitle()}</div>
            <div class='article-content'>{$p->getContent()}</div>
            <div class='article-other'>
                {$tag} 
                
                <div >
                <a class='article-btn-link' href='delete.php?title={$p->getTitle()}'>Usuń</a> 
                <a class='article-btn-link' href='edit.php?title={$p->getTitle()}'>Edytuj</a>
                </div>
                <div class='article-date'>{$p->getDate()}</div>
            </div>
           
        </div>
TEXT;
      //  var_dump($html);
        return $html;
    }

}