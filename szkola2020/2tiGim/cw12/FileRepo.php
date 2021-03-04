<?php
require_once "Item.php";
require_once "configuration.php";
class FileRepo{
    private array $items = [];

    public function __construct()
    {
        
    }
    public function saveItem(Item & $item):bool
    {
        $f = fopen(DIR.'/'.ITEM_FILE,'a');
        if(!$f) return false;
        fwrite($f,$item->toJSON().PHP_EOL);
        return true;
    }
}