<?php
function rejestracja(string $login,string $data,string $funkcja):string{
   $plik = fopen("rejestracja.txt",'a');
   if($plik){
       fwrite($plik,$login.'|'.$data.'|'.$funkcja.PHP_EOL);
       fclose($plik);
       return "<div>Zarejestrowano {$login} z datą: {$data}</div>\n";
   }
   return "<div style='color:red;'>Błąd rejestracji</div>\n";
}
function getAllFromFile(string $filename):array{
    $lines = file($filename,FILE_IGNORE_NEW_LINES);
    $dane = [];
    foreach($lines as $row){
        $dane[] = explode('|',$row);
    }
    return $dane;
}

function showInTable(array $dane):string{
    $html = "<table>\n";
    $html .= "<tr><th>Lp</th><th>Login</th><th>Data przyjazdu</th></th><th>Pełniona funkcja</th></tr>";
    $lp=1;
    foreach($dane as $row){
        $html .= "<tr><td>{$lp}</td><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td></tr>";
    }
    return $html."</table>\n";
}