<?php
require_once "Car.php";
class FileRepo{
    public static function saveRow(Car $car,string $fileName):void {
        $f = fopen($fileName,"a");
        fwrite($f,$car);
        fclose($f);
    }
    public static function getAll(string $fileName="dane.txt"): array 
    {
        $lines = file($fileName,FILE_IGNORE_NEW_LINES);
        $cars = [];
        foreach($lines as $item){
            $dane = explode('|',$item);
            $cars[] = new Car($dane[0],$dane[1],$dane[2],$dane[3]);
        }
        return $cars;
    }
    public static function saveCar(Car $c, string $fileName="dane.txt"):void
    {
       $f = fopen($fileName,'a');
       fwrite($f,$c->getMarka().'|'.$c->getMiejsca().'|'.$c->getRokProdukcji().'|'.$c->getCena().PHP_EOL);
       fclose($f);
    }
    public static function saveAll(array $dane,string $fileName = "dane.txt"):void
    {
        $f = fopen($fileName,'w');
        foreach($dane as $car){
            fwrite($f,$car->getMarka().'|'.$car->getMiejsca().'|'.$car->getRokProdukcji().'|'.$car->getCena().PHP_EOL);
        }
        fclose($f);
    }
}