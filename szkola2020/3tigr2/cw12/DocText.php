<?php
require_once "Document.php";
class DocText extends Document
{
    public array $content;
    public function __construct(array $content=[], string $name = "noname", string $date="")
    {
        parent::__construct($name, $date);
        $this->content = $content;
    }
    public function info():string
    {
        $html = "<div class='card-body'><div class='card-title'>Dokument: {$this->name} utworzony: {$this->date}</div>";
        if(count($this->content)==0){
            $html .= "<div class='card-text'>Brak zawartości</div>";
        }else{
            $html .= "<div class='card-text'><div>Zawiera: </div>";
            foreach($this->content as $line){
                $html .= "<div>{$line}</div>";
            }
        }
        return $html."</div></div>";
    }
}
