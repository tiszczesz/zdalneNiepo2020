<?php

function generTab(int $r, int $c):string{
    $licznik=0;
    $html = "<table>";
    for($i=1;$i<=$r;$i++){
        $html .= "<tr>";
        for($j=1;$j<=$c;$j++){
            $html .= "<td>".(++$licznik)."</td>";
        }
        $html .= "</tr>";
    }
    return $html . "</table>\n";
}