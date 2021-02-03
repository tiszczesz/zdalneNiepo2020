<?php
class Post{
    private string $content;
    private string $title;
    private string $date;
    private string $tag;
    private string $style;

    public function __construct(string $title, string $content="",string $date=""
                 ,string $tag="news",string $style="")
    {
       $this->title = $title;
       $this->content = $content;
       $this->date = $date==='' ? date("d-m-Y H:i:s") : $date;
       $this->tag = $tag;
       $this->style = $style;
    }
    public function setContentFromFile(string $fileName):void
    {
        $this->content = file_get_contents($fileName);
    }
    public function setDate(string $date):void
    {
       $this->date = $date;
    }
    // public function __toString():string
    // {
    //     return
    // }
    public function getContent():string
    {
        return $this->content;
    }
    public function getDate():string
    {
        return $this->date;
    }
    public function getTitle():string
    {
        return $this->title;
    }
    public function getTag():string
    {
        return $this->tag;
    }
    public function getStyle():string
    {
        return $this->style;
    }
}