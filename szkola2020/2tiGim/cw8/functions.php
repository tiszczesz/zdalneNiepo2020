<?php
const SecInYear = 3600*24*365;
function getRandomDate(int $yearD,int $yearU):string{
   if($yearD>$yearU) swap($yearD,$yearU);
   $date = random_int($yearD*SecInYear,$yearU*SecInYear);
   return date("d-m-Y",$date);
}
function swap(int & $a, int & $b):void{
    $temp = $a;
    $a = $b;
    $b = $temp;
}
function dateToFile(string $filename,int $d, int $u,int $count):void{

}
// dateToFile("dane.txt",-20,30,30)     ---> 12-02-2002|03-09-2013.....