<?php
require_once "Car.php";
class FileRepo{
    public static function saveRow(Car $car,string $fileName):void {
        $f = fopen($fileName,"a");
        
    }
}