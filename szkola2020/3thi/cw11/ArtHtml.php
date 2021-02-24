<?php
class ArtHtml
{
    public static function ArticleToDiv(Article& $a): string
    {
        $html = "<div class='article'>\n";
        $html .= "<h3>{$a->getTitle()}</h3>";
        $html .= "<div style='{$a->getStyle()}'>{$a->getContent()}</div>";
        $html .= "<div class='article-other'>\n";
        $tag = trim($a->getTag()) != ""
            ? "<div class='article-tag'>{$a->getTag()}</div>\n" :
            "";
            $html .= "{$tag}<div><a class='article-link' href='delete.php?title={$a->getTitle()}'>Usuń</a>"
            ."<a class='article-link' href='edit.php?title={$a->getTitle()}'>Edytuj</a></div>\n";
        if (trim($a->getDate()) != '') {
            $html .= "<div class='article-date'>{$a->getDate()}</div>\n";
        }

        return $html . "</>\n</div></div>\n";
    }
    public static function ArticleToForm(Article& $a=null):string
    {
        $tags = file("tags.txt",FILE_IGNORE_NEW_LINES);
      //  var_dump($tags);
        $items = "";
        $tag = $a!=null ? $a->getTag() : "";
        foreach($tags as $row){
            if(mb_strtoupper($row)===mb_strtoupper($tag)){
                $selected = "selected";
            }else{
                $selected = "";
            }
            $items .= "<option value='{$row}' {$selected}>{$row}</option>\n";
        }
        if($a==null){
            $action = "addNew.php";
            $title = "";
            $content = "";
            $readonly = "";
            $style = "";
        }else{
            $action = "editResult.php";
            $title = $a->getTitle();
            $content = $a->getContent();
            $readonly = "readonly";
            $style = $a->getStyle();
        }
       $html = <<<TEXT
       <form action="{$action}" method="post">
       <div class="line">
           <label for="title">Podaj tytuł artykułu: </label>
           <input type="text" name="title" id="title" required value='{$title}' {$readonly}>
       </div>
       <div class="line">
           <label class="lab1" for="content">Podaj treść artykułu</label>
           <textarea name="content" id="content" cols="30" rows="10" requiredS>{$content}</textarea>
       </div>
       <div class="line">
           <label  for="tag">Wybierz tag</label>
          <select class='select-list-tags' name='tag'>
          {$items}
          </select>
       </div>
       <div class="line">
           <label  for="style">Zdefiniuj styl artykułu</label>
           <input type="text" name="style" id="style" value='{$style}' >
       </div>
       <div class="line">
           <input type="submit" value="Zapisz artykuł">
       </div>
   </form>
    
TEXT;
        return $html;
}
}
