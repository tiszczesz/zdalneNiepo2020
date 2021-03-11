<?php
require_once "Item.php";
class Book extends Item{
    public string $ISBN = "BIB0001";
    public string $author = "noname";
    public int $pages=100;
    public float $price=12.99;

    public function __construct(string $ISBN="",string $author="noname",
         int $pages=100,float $price = 12.99,string $name="noname",int $id=-1)
    {
        parent::__construct($name,$id);
        $this->ISBN = $ISBN!="" ? $ISBN : "BIB00".$this->itemId;
        //todo .....
    }
}