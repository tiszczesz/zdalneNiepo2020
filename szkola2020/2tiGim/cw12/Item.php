<?php
class Item{
    public static  int $counter=0;
    public int $itemId;
    public string $name;
    public function __construct(string $name="noname")
    {
       $this->itemId = ++self::$counter;
       $this->name = $name;
    }
    public function toJSON():string
    {
        return json_encode($this);
    }
    public function fromJSON(string $json):Item {
        
    }
}