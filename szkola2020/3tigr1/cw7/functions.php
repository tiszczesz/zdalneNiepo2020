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
function dateToTable(string $fileName):string{
    
    $d1 = file($fileName,FILE_IGNORE_NEW_LINES);
    $daty = [];
    foreach($d1 as $row){
        $d2 = explode("|",$row);
        $daty[] = [new DateTime($d2[0]),new DateTime($d2[1])];
    }
   // var_dump($daty);
    $html = "<table>";
    $html .= "<tr><th>Data początkowa</th><th>Data końcowa</th><th>Ilość dni</th>"
         ."<th>Godziny</th><th>Tygodnie</th><th>Lata</th></tr>";
    foreach($daty as $r){
        $int = $r[0]->diff($r[1]);
        //var_dump($int);
        $godziny = $int->days*24;
        $tygodnie = round( $int->days/7,2);
        $html .= "<tr><td>{$r[0]->format('d-m-Y')}</td><td>{$r[1]->format('d-m-Y')}</td><td>{$int->days}</td>"
             ."<td>{$godziny}</td><td>{$tygodnie}</td><td>{$int->y}</td></tr>";
    }
    return $html."</table>";
}