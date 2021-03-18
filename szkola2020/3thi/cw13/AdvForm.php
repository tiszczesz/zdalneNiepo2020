<?php
require_once "Form.php";
class AField{
    public string $typ;
    public string $name;
    public string $label;
    public array $atributes = [];
    public string $id;
    public array $values;
    public function __construct(string $label,string $name,string $id,string $type,array $values, array $atributes = [])
    {
       $this->label = $label;
       $this->name = $name;
       $this->id = $id;
       $this->type = $type;
       $this->atributes = $atributes;
       $this->values = $values;

    }
    public function __toString():string
    {
       $html = "<div class='line'><label for='{$this->id}'>{$this->title}</label>";
       switch($this->type){
            case "select":
                $html .= "<select name='{$this->name}' id='{$this->id}'>";
                foreach($this->values as $v){
                        $html .= "<option value='$v'>{$v}</option>";
                }
                $html .= "</select>";
                break;
            case "chackbox":


                break;
       }
       return $html;
    }
}
class AdvForm extends Form{
    private array $Afield;

 // todo ctor
    public function generateForm()
    {
        $body = "";
        foreach($this->fields as $k=>$v){
            $body.= "<div><label for='{$k}'>{$k}</label>\n<input type='{$v}' name='{$k}' id='{$k}'>\n</div>\n";
        }
        foreach($this->Afield as $af){
            $body .= $af;
        }
        return<<<TEXT
        <form action="{$this->action}" method="{$this->method}">        
        {$body}
        <div><input type="submit" value="{$this->btnValue}"></div>
        </form>
TEXT;
    }
}