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
    $html .= "<tr><th>Imię</th><th>Data</th><th>Przyniesie</th><th>Operacje na danych</th></tr>\n";
    foreach($dane as $k=> $row){
        $line = explode('|',$row);
        //var_dump($line);
        $html .= "<tr><td>{$line[0]}</td> <td>{$line[1]}</td><td>{$line[2]}</td>"
        ."<td><a href='edit.php?id={$k}'>Edytuj</a> <a href='delete.php?id={$k}'>Usuń</a></td> </tr>\n";
    }  
    return $html."</table>\n";
}
function saveAllToFile(string $filename,array $dane):bool{
    //tylko tablica w formacie xxxxx|12-22-1899|eeeee
    $plik = fopen($filename,'w');
    if(!$plik) return false;
    foreach($dane as $line){
        fwrite($plik,$line.PHP_EOL);
    }
    return true;
}