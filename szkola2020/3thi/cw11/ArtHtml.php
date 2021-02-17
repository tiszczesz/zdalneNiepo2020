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
        foreach($tags as $row){
            $items .= "<option value='{$row}'>{$row}</option>\n";
        }
       $html = <<<TEXT
       <form action="addNew.php" method="post">
       <div class="line">
           <label for="title">Podaj tytuł artykułu: </label>
           <input type="text" name="title" id="title" required>
       </div>
       <div class="line">
           <label class="lab1" for="content">Podaj treść artykułu</label>
           <textarea name="content" id="content" cols="30" rows="10" requiredS></textarea>
       </div>
       <div class="line">
           <label  for="tag">Wybierz tag</label>
          <select class='select-list-tags' name='tag'>
          {$items}
          </select>
       </div>
       <div class="line">
           <label  for="style">Zdefiniuj styl artykułu</label>
           <input type="text" name="style" id="style" >
       </div>
       <div class="line">
           <input type="submit" value="Zapisz artykuł">
       </div>
   </form>
    
TEXT;
        return $html;
}
}
