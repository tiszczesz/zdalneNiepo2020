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

    public function setTag(string $tag):void
    {
       $this->tag = $tag;
    }
    public function getContentFromFile(string $filename)
    {
        $lines = file($filename,FILE_IGNORE_NEW_LINES);
        $content = "";
        $tool = "";
        foreach($lines as $line){
            $dane = explode("|",$line);
            if($dane[0]==TOOL){
                $this->setTag($dane[1]);
                $this->setStyle($dane[2]);
            }else{
                $content .= $line.PHP_EOL;
            }            
        }

        $this->content = $content;
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
    public function setStyle(string $style):void
    {
        $this->style=$style;
    }
    public function setContent(string $content):void {
        $this->content = $content;
    }
}