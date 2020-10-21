<?php
function generTab(int $r, int $c):string{
    $html = "<table>\n";
    for($i=1;$i<=$r;$i++){
        $html .= "<tr>";
        for($j=1;$j<=$c;$j++){
            $wyr = $i==1 || $j==1 ? " class='wyr'": "";
            $html .= "<td {$wyr}>".($i*$j)."</td>";
        }
        $html .= "</tr>";
    }
    return $html."</table>\n";
}
function isPrimeNumber(int $number):bool{
    if($number<=1) return false;
    for($i=2;$i*$i<=$number;$i++){
        if($number%$i==0) return false;
    }
    return true;
}