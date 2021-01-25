<?php
const secInYear = 24*3600*365;
function getRndDate(int $d, int $u):string{
    if($d>$u) swap($d,$u);
    return date("d-m-Y h:i:s",random_int($d*secInYear,$u*secInYear));
}
function swap(int& $a, int& $b):void{
    $temp = $a;
    $a = $b;
    $b = $temp;
}
function dateToFile(string $fileName,int $d=-30, int $u=50,int $rows=20):void{
    $f = fopen($fileName,'w');
    if(!$f) return;
    for($i=0;$i<$rows;$i++){
        fwrite($f,getRndDate($d,$u).'|'.getRndDate($d,$u).PHP_EOL);
    }
    fclose($f);
}
function datesToTable(string $fileName):string{
    $html = "<table>\n<tr><th>Lp</th><th>Data początkowa</th><th>Data końcowa</th>"
         ."<th>lata</th><th>miesiące</th><th>godziny</th><th>minuty</th></tr>\n";
    $dd = file($fileName,FILE_IGNORE_NEW_LINES);
    $lp=0;
    foreach($dd as $row){
        $lp++;
        $daty = explode("|",$row);
        $dp = new DateTime($daty[0]);
        $dk = new DateTime($daty[1]);
        $interval = $dk->diff($dp);
        $miesiace = $interval->y*12+$interval->m;
        $minuty = $interval->days*24*60+$interval->i;
        $godziny = $interval->days*24+$interval->h;
        $html .= "<tr><td>{$lp}</td><td>{$dp->format('d-m-Y h:i:s')}</td><td>{$dk->format('d-m-Y h:i:s')}</td>"
          ."<td>{$interval->y}</td><td>{$miesiace}</td><td>{$godziny}</td><td>{$minuty}</td></tr>";
    }
    //var_dump($dd);
    return $html."</table>\n";
}