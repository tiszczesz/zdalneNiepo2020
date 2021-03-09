<?php
require_once "Car.php";
require_once "configuration.php";
class FileRepo{
    public static function saveRow(Car $car,string $fileName=FILENAME):void {
        $f = fopen($fileName,"a");
        fwrite($f,$car);
        fclose($f);
    }
    public static function getAll(string $fileName=FILENAME): array 
    {
        $lines = file($fileName,FILE_IGNORE_NEW_LINES);
        $cars = [];
        foreach($lines as $item){
            $dane = explode('|',$item);
            $cars[] = new Car($dane[0],$dane[1],$dane[2],$dane[3]);
        }
        return $cars;
    }
    public static function saveCar(Car $c, string $fileName=FILENAME):void
    {
       $f = fopen($fileName,'a');
       fwrite($f,$c->getMarka().'|'.$c->getMiejsca().'|'.$c->getRokProdukcji().'|'.$c->getCena().PHP_EOL);
       fclose($f);
    }
    public static function saveAll(array $dane,string $fileName = FILENAME):void
    {
        $f = fopen($fileName,'w');
        foreach($dane as $car){
            fwrite($f,$car->getMarka().'|'.$car->getMiejsca().'|'.$car->getRokProdukcji().'|'.$car->getCena().PHP_EOL);
        }
        fclose($f);
    }
    public static function getByMarka(string $marka, string $fileName=FILENAME):?Car
    {
        $dane = self::getAll($fileName);
        //var_dump($dane);
        foreach($dane as $c){
            if($c->getMarka()===$marka){
                return $c;
            }
        }
        return null;
    }
    public static function updateCar(Car & $c,string $oldMarka):bool
    {
        $cars = self::getAll(FILENAME);
        //var_dump($cars);
        foreach($cars as &$item){
           
            if($oldMarka===$item->getMarka()){               
                $item = $c;
                break;
            }
        }
        self::saveAll($cars,FILENAME);
        return true;
    }
}