<?php
class Item{
    public static  int $counter=0;
    public int $itemId;
    public string $name;
    public function __construct(string $name="noname",int $id=-1)
    {
      // $this->itemId = ++self::$counter;
      $this->itemId = $id=== -1 ? ++self::$counter: $id; //todo do testowania
       $this->name = $name;
    }
    public function toJSON():string
    {
        return json_encode($this);
    }
    public static function fromJSON(string $json): ?Item {
        $data = json_decode($json);
       // var_dump($data);
        return new Item($data->name,$data->itemId);
    }
}