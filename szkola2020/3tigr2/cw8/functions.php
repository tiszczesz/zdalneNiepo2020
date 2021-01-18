<?php
const secInYear = 24*3600*365;
function getRndDate(int $d, int $u):string{
    if($d>$u) swap($d,$u);
    return date("d-m-Y",random_int($d*secInYear,$u*secInYear));
}
function swap(int& $a, int& $b):void{
    $temp = $a;
    $a = $b;
    $b = $temp;
}
function dateToFile(string $fileName,int $d=-30, int $u=30,int $rows=20):void{
    $f = fopen($fileName,'w');
    if(!$f) return;
    for($i=0;$i<$rows;$i++){
        fwrite($f,getRndDate($d,$u).'|'.getRndDate($d,$u).PHP_EOL);
    }
    fclose($f);
}