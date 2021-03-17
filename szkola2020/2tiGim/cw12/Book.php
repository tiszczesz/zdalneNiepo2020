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
        $this->price = $price;
        $this->author = $author;
        $this->pages = $pages;
    }
    public static function fromJSON(string $json): ?Book {
        $data = json_decode($json);
        //var_dump($data);
        return new Book($data->ISBN,$data->author,$data->pages,$data->price,$data->name,$data->itemId);
    }
}