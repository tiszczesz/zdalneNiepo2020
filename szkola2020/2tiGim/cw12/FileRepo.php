<?php
require_once "Item.php";
require_once "configuration.php";
class FileRepo{
    private array $items = [];

    public function __construct(array& $items=[])
    {
        $this->items = $items;
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
        return [new Item("Element1"),new Item("Element 2") , new Item("Nowy Element")
        ,new Item()];
    }
    public function getFromFile(string $filleName=ITEM_FILE):array{
        $lines = file(DIR.'/'.$filleName,FILE_IGNORE_NEW_LINES);
       // var_dump($lines);

        return [];
    }
}