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
    public static function postToForm(Post $p=null):string
    {
        if($p==null){
            $action = "addNew.php";
            $button = "Dodaj";
            $title = "";
            $content = "";
        }else{
            $button = "Zapisz";
        }

        return<<<TEXT
        <form action="{$action}" method="post">
        <div class="line">
            <label for="title">Podaj tytuł: </label>
            <input type="text" name="title" id="title" value={$title}>
        </div>
        <div class="line">
            <label for="content">Wstaw zawartość: </label>
            <textarea name="content" id="content" cols="30" rows="10">{$content}</textarea>
        </div>
        <div class="line">
            <input type="submit" value="{$button}">
        </div>
    </form>
TEXT;
    }
}