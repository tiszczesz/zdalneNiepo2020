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
      return "";
    }
    public function setStyle(string $style):void
    {
      $this->style = $style;
    }
    public function setDate(string $date):void
    {
      $this->date = $date;
    }
    public function getContent():string
    {
       return $this->content;
    }
    public function getTitle():string
    {
       return $this->title;
    }
    public function getDate():string
    {
       return $this->date;
    }
    public function getStyle():string
    {
       return $this->style;
    }
    public function getTag():string
    {
       return mb_strtoupper($this->tag);
    }
}