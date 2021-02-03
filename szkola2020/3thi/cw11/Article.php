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
        return "***";
    }
    public function getTitle():string
    {
        return $this->title;
    }
    public function getContent():string
    {
        return $this->content;
    }
    public function getDate():string
    {
        return $this->date;
    }
    public function getTag():string
    {
        return mb_strtoupper($this->tag);
    }
    public function getStyle():string
    {
        return $this->style;
    }
}