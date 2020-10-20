<?php
function generTab(int $r, int $c):string{
    $html = "<table>\n";
    for($i=1;$i<=$r;$i++){
        $html .= "<tr>";
        for($j=1;$j<=$c;$j++){
            $html .= "<td>".($i*$j)."</td>";
        }
        $html .= "</tr>";
    }
    return $html."</table>\n";
}