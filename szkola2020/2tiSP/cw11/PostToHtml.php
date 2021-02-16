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
    public static function PostToForm(Post& $p=null):string
    {
        if($p==null){
            $title = "";
            $content = "";
            $action = "addNew.php";
            $btn = "Zapisz post";
        }else{
            $title = $p->getTitle();
            $content = $p->getContent();
            $action = "editPost.php";
            $btn = "Zmień post";
        }
        return<<<TEXT
        <form action="{$action}" method="post">
        <div class="line">
            <label for="title">Tytuł posta: </label>
            <input type="text" name="title" id="title" value='{$title}'>
        </div>
        <div class="line">
            <label for="content">Podaj zawartość posta: </label>
            <textarea name="content" id="content" cols="30" rows="10">{$content}</textarea>
        </div>
        <div class="line">
            <input type="submit" value="{$btn}">
        </div>
    </form>

TEXT;
    }

}