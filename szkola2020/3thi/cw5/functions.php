<?php

function getAllFromFile(string $filename):array{
    $lines = file($filename,FILE_IGNORE_NEW_LINES);
    $result=[];
    foreach($lines as $row){
        $result[] = explode('|',$row);
    }
    return $result;
}
function toTable(array $dane):string{
   
        $html = "<table>";
        $html .= "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th>".
             "<th>Ocena</th><th>Przedmiot</th></tr>\n";
        $lp = 0;
        foreach($dane as $row){
            $lp++;
            $html .= "<tr><td>{$lp}</td><td>{$row[0]}</td><td>{$row[1]}</td>"
                    ."<td>{$row[2]}</td><td>{$row[3]}</td></tr>";
        }
        return $html."</table>\n";
}
function getAllTopic(string $filename):array{
    $lines = file($filename,FILE_IGNORE_NEW_LINES);   
    return $lines;
}
function topicToSelect(array $topics):string{
    $html = '<select name="przedmiot" id="przedmiot">'."\n";
    foreach($topics as $topic){
        $html .= "<option value='{$topic}'>{$topic}</option>\n";
    }
    return $html."</select>\n";
}
function getAllByTopic(array $dane,string $topic):array{
    $result = [];
    foreach($dane as $item){
        if($item[3]==$topic){
            $result[]=$item;
        }
    }
    return $result;
}
function getAVGforTopic(array $dane,string $topic):string{
    $sum = 0;
    $count = 0;
    foreach($dane as $item){
        if($item[3]==$topic){
            $sum += $item[2];
            $count++;
        }
    }
    return $count==0 ? "<div style='color:red;'>Brak ocen z przedmiotu: {$topic}</div>\n"
           :"<div style='color:green;'>Średnia ocen z przedmiotu {$topic} wynosi: ".round($sum/$count,2)."</div>\n";
}
function getMax(array $dane,string $topic):string{
    return "Do zrobienia!!!!";
}
function getMin(array $dane,string $topic):string{
    return "Do zrobienia!!!!";
}