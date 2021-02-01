<?php
class Article{
    private string $content;
    private string $title;
    private string $date;
    private string $style;
    private string $tag;
    public function __construct(string $content,string $title,string $date="",string $style="",string $tag="news")
    {
       $this->content = $content;
       $this->title = $title;
       $this->date = $date==="" ? date("d-m-Y") : $date;
       $this->style = $style;
       $this->tag = $tag;
    }
    public function getContentFromFile(string $fileName):void
    {
       $this->content = file_get_contents($fileName);
    }
    public function __toString():string
    {
       $html = "<div style='{$this->style}'>\n";
        $html .= "<h3>{$this->title}</h3>\n";
        $html .= "<p>{$this->content}</p>\n";
        if($this->date!=""){
            $html .= "<div class='article-footer'>Utworzono: {$this->date}</div>";
        }
       return $html."</div>\n";
    }
    public function setStyle(string $style):void
    {
      $this->style = $style;
    }
    public function setDate(string $date):void
    {
      $this->date = $date;
    }
}