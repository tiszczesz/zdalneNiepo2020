<?php
class Article{
    private string $title;
    private string $content;
    private string $date;
    private string $tag = "news";
    private string $style;
    public function __construct(string $title,string $content="",
                        string $date="",string $tag="news",string $style="")
    {
        $this->title = $title;
        $this->content = $content;
        $this->setDate($date);
        $this->tag = $tag;
        $this->style = $style;
    }
    public function setDate(string $date):void
    {
        $this->date = $date!="" ? $date : date("d-m-Y");
    }
    public function getContentFromFile(string $filename)
    {
        $this->content = file_get_contents($filename);
    }
    public function __toString():string
    {
        $html = "<div class='article'>\n";
        $html .= "<h3>{$this->title}</h3>";
        $html .= "<div style='{$this->style}'>{$this->content}</div>";
        if(trim($this->date)!=''){
            $html .= "<div class='article-date'>{$this->date}</div>";
        }
        return $html."</div>\n";
    }
}