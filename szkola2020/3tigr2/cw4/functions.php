<?php
function saveToFile(string $filename,array $dane):bool{
    $plik = fopen($filename, "a");
    if ($plik) {
        fwrite($plik,$dane[0].'|'.$dane[1].'|'.$dane[2].PHP_EOL);
        fclose($plik);       
        return true;
    }else{
        return false;
    }
}
function getAll(string $filename):array{
    $all = file($filename,FILE_IGNORE_NEW_LINES);
    //var_dump($all);
    $result = [];
    foreach($all as $line){
        $result[] = explode('|',$line);
    }
    return $result;
}
function daneToList(array $dane):string{
    $html = "<ol>\n";
    foreach($dane as $k=>$row){
        $html .= "<li><span class='wyr'>{$row[0]}</span> data: <span class='wyr'>{$row[1]}</span> ".
                 "przyniesie: <span class='wyr'>{$row[2]}</span> <a href='usun.php?id={$k}'>USUWANIE</a></li>\n";
    }
    return $html."</ol>\n";
}
function saveAll(string $filename,array $dane):bool{
    $plik = fopen($filename,'w');
    if($plik){
        foreach($dane as $row){
            fwrite($plik,implode('|',$row).PHP_EOL);
        }
        fclose($plik);
        return true;
    }
    return false;
}