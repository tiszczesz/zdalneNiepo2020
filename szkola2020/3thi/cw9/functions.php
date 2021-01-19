<?php
const secInYear = 3600*24*365;
function getRandomDate(int $d, int $u):string{
    if($d>$u){
        swap($d,$u);
    }
    return date("d-m-Y",random_int($d*secInYear,$u*secInYear));
}

function swap(int& $a, int& $b):void{
    $temp = $a;
    $a = $b;
    $b = $temp;
}
//12-0-1976|23-09-2019
//.................
function datesToFile(string $fileName,int $d=-20, int $u=60,int $rows=30):void{
    $f = fopen($fileName,'w');
    if(!$f) return;
    for($i=0; $i<$rows; $i++){
        fwrite($f,getRandomDate($d,$u).'|'.getRandomDate($d,$u).PHP_EOL);
    }
    fclose($f);
}


function datesToTable(string $fileName):string{
    $html = "<table><tr><th>Lp</th><th>data początkowa</th><th>data końcowa</th>"
            ."<th>lata</th><th>miesiące</th><th>dni</th></tr>";
    
    $d1 = file($fileName,FILE_IGNORE_NEW_LINES);
    $d2 = [];
    foreach($d1 as $row){
        $line = explode('|',$row);
        $d2[] = [new DateTime($line[0]),new DateTime($line[1])];
    }
    //var_dump($d2);
    $lp=0;
    foreach($d2 as $elem){
        $lp++;
        $int = $elem[0]->diff($elem[1]);
        $m = $int->y*12+$int->m;
        $html .= "<tr><td>{$lp}</td><td>{$elem[0]->format('d-m-Y')}</td><td>{$elem[1]->format('d-m-Y')}</td>"
            ."<td>{$int->y}</td><td>{$m}</td><td>{$int->days}</td></tr>";
    }

    return $html."</table>";

}