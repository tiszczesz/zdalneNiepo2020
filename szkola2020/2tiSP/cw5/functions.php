<?php
function saveToFile(string $filename,string $imie,string $data,string $item): bool {
    $plik = fopen($filename,'a');
    if(!$plik) return false;
    fwrite($plik,$imie.'|'.$data.'|'.$item.PHP_EOL);
    fclose($plik);
    return true;
}
function getFromFile(string $filename):array{
    if(file_exists("lista.txt")){
        $dane = file("lista.txt",FILE_IGNORE_NEW_LINES);
        return $dane;
    }
    return [];
}
function showList(array $dane):string{
    if(count($dane)==0) return "";
    $html = "<ol>\n";   
        //var_dump($dane);
        foreach($dane as $row){
            $line = explode('|',$row);
            //var_dump($line);
            $html .= "<li>{$line[0]} data: {$line[1]} weźmie ze sobą:{$line[2]} </li>\n";
        }    
   
    return $html."</ol>\n";
}
function toTable(array $dane):string{
    $html = "<table>";
    $html .= "<tr><th>Imię</th><th>Data</th><th>Przyniesie</th></tr>\n";
    foreach($dane as $row){
        $line = explode('|',$row);
        //var_dump($line);
        $html .= "<tr><td>{$line[0]}</td> <td>{$line[1]}</td><td>{$line[2]}</td> </tr>\n";
    }  
    return $html."</table>\n";
}