<?php
require_once "Car.php";
class FileRepo{
    public static function saveRow(Car $car,string $fileName):void {
        $f = fopen($fileName,"a");
        fwrite($f,$car);
        fclose($f);
    }
    public static function getAll(string $fileName): array 
    {
        $lines = file($fileName,FILE_IGNORE_NEW_LINES);
        $cars = [];
        foreach($lines as $item){
            $dane = explode('|',$item);
            $cars[] = new Car($dane[0],$dane[1],$dane[2],$dane[3]);
        }
        return $cars;
    }
}