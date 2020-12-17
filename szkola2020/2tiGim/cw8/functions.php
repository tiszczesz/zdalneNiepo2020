<?php
const SecInYear = 3600 * 24 * 365;
function getRandomDate(int $yearD, int $yearU): string
{
    if ($yearD > $yearU) swap($yearD, $yearU);
    $date = random_int($yearD * SecInYear, $yearU * SecInYear);
    return date("d-m-Y", $date);
}
function swap(int &$a, int &$b): void
{
    $temp = $a;
    $a = $b;
    $b = $temp;
}
function dateToFile(string $filename, int $d=-20, int $u=60, int $count=20): void
{
    $f = fopen($filename, 'w');
    if (!$f) return;
    for ($i = 0; $i < $count; $i++) {
        $line = getRandomDate($d, $u) . '|' . getRandomDate($d, $u) . PHP_EOL;
        fwrite($f, $line);
    }
    fclose($f);
}
function dateToTable(string $filename):string{
    $d1 = file($filename,FILE_IGNORE_NEW_LINES);
    //var_dump($d1);
    $dates = [];
    foreach($d1 as $row){
        $d2 = explode('|',$row);
        $dates[] = [new DateTime($d2[0]),new DateTime($d2[1])];
    }
   // var_dump($dates);
    $html = "<table><tr><th>Lp</th><th>data pocz.</th>"
          ."<th>data końc.</th><th>lata</th><th>miesiące</th><th>dni</th></tr>";
    $lp=0;
    foreach($dates as $row){
        $lp++;
        $intrval = $row[0]->diff($row[1]);
        $miesiace = $intrval->y*12 + $intrval->m;
        $html  .= "<tr><td>{$lp}</td><td>{$row[0]->format('d-m-Y')}</td><td>{$row[1]->format('d-m-Y')}"
        ."</td><td>{$intrval->y}</td><td>{$miesiace}</td><td>{$intrval->days}</td></tr>";
    }
    return $html."</table>";
}
// dateToFile("dane.txt",-20,30,30)     ---> 12-02-2002|03-09-2013.....