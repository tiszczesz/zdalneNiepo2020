<?php
function saveToFile(string $filename,string $imie,string $data,string $item): bool {
    $plik = fopen($filename,'a');
    if(!$plik) return false;
    fwrite($plik,$imie.'|'.$data.'|'.$item.PHP_EOL);
    fclose($plik);
    return true;
}
function showList():string{
    $html = "<ol>\n";
    if(file_exists("lista.txt")){
         $dane = file("lista.txt",FILE_IGNORE_NEW_LINES);
        //var_dump($dane);
        foreach($dane as $row){
            $line = explode('|',$row);
            var_dump($line);
        }
    }
   
    return $html."</ol>\n";
}