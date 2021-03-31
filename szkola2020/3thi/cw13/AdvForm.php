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
       $html = "<div class='line'><label for='{$this->id}'>{$this->label}</label>\n";
       switch($this->type){
            case "select":
                $html .= "<select name='{$this->name}' id='{$this->id}'>\n";
                foreach($this->values as $v){
                        $html .= "\t<option value='$v'>{$v}</option>\n";
                }
                $html .= "</select>\n";
                break;
            case "checkbox":
                $html .= "<br>";
                foreach($this->values as $v){
                    $html .= "\t<input type='checkbox' value='$v'>{$v}<br>\n";
                }

                break;
       }
       return $html."</div>\n";
    }
}
class AdvForm extends Form{
    private array $Afield;
    public function __construct(array $Afield = [])
    {
        parent::__construct();
        $this->Afield = $Afield;
    }
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