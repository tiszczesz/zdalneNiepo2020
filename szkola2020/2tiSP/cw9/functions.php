<?php

const secPerYear = 365.25 * 24 * 3600;

function getRandomDate(int $d, int $u): string
{
    return date("d-m-Y", random_int($d * ((int)secPerYear), $u * ((int)secPerYear)));
}

function dateToFile(string $fileName, int $d = -20, int $u = 60, int $rows = 30): void
{
    $f = fopen($fileName, 'w');
    if ($f) {
        for ($i = 0; $i < $rows; $i++) {
            fwrite($f, getRandomDate($d, $u) . '|' . getRandomDate($d, $u) . PHP_EOL);
        }
        fclose($f);
    }
}

function datesToTable(string $fileName): string
{
    $html = "<table>";
    $dates = file($fileName,FILE_IGNORE_NEW_LINES);
    $html .= "<tr><th>Lp</th><th>Data początkowa</th><th>Data końcowa</th><th>Lata</th><th>Tygodnie</th><th>Godziny</th><th>Minuty</th></tr>";
    $lp =0;
    foreach($dates as $row){
        $lp++;
        $dd = explode('|',$row);
        $dp = new DateTime($dd[0]);
        $dk = new DateTime($dd[1]);
        $dif = $dk->diff($dp);
        $weeks = round($dif->days/7,0);
        $mins = $dif->days*24*60+$dif->i;
        $godziny = $dif->days*24;
        $html .= "<tr><td>{$lp}</td><td>{$dp->format("d-m-Y")}</td><td>{$dk->format("d-m-Y")}</td>"
            ."<td>{$dif->y}</td><td>{$weeks}</td><td>{$godziny}</td><td>$mins</td></tr>";
    }
   // var_dump($dates);
    return $html . "</table>";
}
