<?php
class Post{
    private string $title;
    private string $content;
    private string $date;
    private string $tag;
    private string $style;

    public function __construct(string $title,string $content="",string $date="",string $tag="news",string $style="")
    {
        $this->title = $title;
        $this->content = $content;
        $this->setDate($date);
        $this->setTag($tag);
        $this->style = $style;
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
    public function setDate(string $date):void
    {
        $this->date = trim($date)==='' ? date("d-m-Y H:i:s") : $date;
    }
    public function setTag(string $tag):void
    {
        $this->tag = $tag;
    }
    public function contentFromFile(string $fileName):void
    {
        $this->content = file_get_contents($fileName);
    }
    public function setStyle(string $style):void
    {
        $this->style = $style;
    }
}