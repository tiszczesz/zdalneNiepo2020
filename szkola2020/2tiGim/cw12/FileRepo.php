<?php
require_once "Item.php";
require_once "configuration.php";
class FileRepo{
    private array $items = [];
    private string $pathToFile = DIR.'/'.ITEM_FILE;

    public function __construct(array& $items=[])
    {
        if(file_exists($this->pathToFile)){
            $this->items = $this->getFromFile();
        }else{
            $this->items = $items;
        }
        
    }
    public function saveItem(Item & $item):bool
    {
        $f = fopen(DIR.'/'.ITEM_FILE,'a');
        if(!$f) return false;
        fwrite($f,$item->toJSON().PHP_EOL);
        fclose($f);
        return true;
    }

    public function getFakeItems():array
    {
        return [new Item("Element1",1),new Item("Element 2",2) , new Item("Nowy Element",3)
        ,new Item()];
    }
    public function getFromFile():array{
        $lines = file($this->pathToFile,FILE_IGNORE_NEW_LINES);
        //var_dump($lines);
        Item::fromJSON($lines[0]);
        foreach($lines as $line){
            $temp = It
        }
        return [];
    }
    public function getItems()
    {
        return $this->items;
    }
}