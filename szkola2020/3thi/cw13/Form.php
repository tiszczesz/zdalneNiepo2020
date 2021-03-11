<?php
class Form{
    private array $fields;
    private string $action;
    private string $method;
    private string $btnValue;
    public function __construct(array& $fields = [],string $action="submit.php", string $method="POST",
              string $btnValue="Zapisz")
    {
        $this->fields = $fields;
        $this->action = $action;
        $this->method = $method;
        $this->btnValue = $btnValue;
    }
    public function generateForm()
    {
        $body = "";
        foreach($this->fields as $k=>$v){
            $body.= "<div><label for='{$k}'>{$k}</label>\n<input type='{$v}' name='{$k}' id='{$k}'>\n</div>\n";
        }
        return<<<TEXT
        <form action="{$this->action}" method="{$this->method}">        
        {$body}
        <div><input type="submit" value="{$this->btnValue}"></div>
        </form>
TEXT;
    }
}