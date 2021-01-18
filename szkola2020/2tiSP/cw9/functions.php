<?php

const secPerYear = 365.25*24*3600;

function getRandomDate(int $d,int $u):string{   
    return date("d-m-Y",random_int($d*((int)secPerYear),$u*((int)secPerYear)));
}

function dateToFile(string $fileName,int $d=-20, int $u=60,int $rows=30):void{
    $f = fopen($fileName,'w');
    if($f){
        for($i=0;$i<$rows;$i++){
            fwrite($f,getRandomDate($d,$u).'|'.getRandomDate($d,$u).PHP_EOL);
        }        
        fclose($f);
    }
}