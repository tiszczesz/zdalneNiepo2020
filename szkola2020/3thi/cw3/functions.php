<?php
function getAll(string $filename):array{
    $lines = file($filename,FILE_IGNORE_NEW_LINES);
    //var_dump($lines);
    $dane = [];
    foreach($lines as $item){
        $dane[] = explode('|',$item);
    }
    return $dane;
}
function showInTable(array $dane){
    $html = "<table>";
    $html .= "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th>".
         "<th>data przyjazdu</th><th>funkcja</th></tr>\n";
    $lp = 0;
    foreach($dane as $row){
        $lp++;
        $html .= "<tr><td>{$lp}</td><td>{$row[0]}</td><td>{$row[1]}</td>"
                ."<td>{$row[2]}</td><td>{$row[3]}</td></tr>";
    }
    return $html."</table>\n";
}
function showInList(array $dane):string{
    $html = "<ul>\n";
    foreach($dane as $row){
        $html .= "<li>{$row[0]} {$row[1]} data przyjazdu: {$row[2]} funkcja: {$row[3]}</li>\n";
    }
    return $html."</ul>";
}