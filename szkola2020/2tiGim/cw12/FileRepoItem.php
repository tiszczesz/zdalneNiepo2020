<?php
require_once "Item.php";
require_once "Book.php";
require_once "configuration.php";
class FileRepoItem{
    private array $items = [];
    private string $pathToFile = DIR.'/'.ITEM_FILE;

    public function __construct(array& $items=[])
    {
        if(file_exists($this->pathToFile)){
            $this->getFromFile();
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

    public function saveAllToFile():bool{
        $f = fopen(DIR.'/'.ITEM_FILE,'w');
        if(!$f) return false;
        foreach($this->items as $item){
            fwrite($f,$item->toJSON().PHP_EOL);
        }
        fclose($f);
        return true;
    }
    public function deleteItem(Item & $item){
       // unset($this->items)  todo
    }
    public function getFakeItems():array
    {
        return [new Item("Element1",1),new Item("Element 2",2) , new Item("Nowy Element",3)
        ,new Item()];
    }
    protected function getFromFile():void{
        $lines = file($this->pathToFile,FILE_IGNORE_NEW_LINES);
        //var_dump($lines);
       
        foreach($lines as $line){
           $this->items[] =  Item::fromJSON($line);
        }
       
    }
    public function getItems()
    {
        return $this->items;
    }
}