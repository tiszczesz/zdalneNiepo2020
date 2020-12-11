<?php
 const secInYear = 3600*24*365.25;
function randomDate(int $low, int $up):string {
    //1970-01-01 $low(y) $up(y)    
    $rDate = random_int(-$low*secInYear,$up*secInYear);
    return date("d-m-Y",$rDate);
}
function saveToFile(string $fileName,int $rows):void {
    $f = fopen($fileName,'w');
    if($f){
        for($i=0;$i<$rows;$i++){
            fwrite($f,randomDate(-20,60).'|'.randomDate(0,70).PHP_EOL);
        }
        fclose($f);
    }
}