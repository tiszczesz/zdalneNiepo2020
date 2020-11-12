<?php
function getConnection(){
    $conn = new mysqli("localhost","root",null,"zdalne4tigr1_cw2");
    if($conn->connect_errno!=0) return null;
    $conn->query("SET NAMES utf8");
    return $conn;
}
function getAllWycieczki():array{
    $conn = getConnection();
    if($conn->connect_errno!=0) return [];
    $sql = "SELECT * FROM wycieczki";
    $dane = [];
    $result = $conn->query($sql);
    while($row = $result->fetch_row()){
        $dane[] = $row;
    }
    $conn->close();
    return $dane;
}
function wycieczkiToList(array $dane):string{
    $html = "<ul>";
    foreach($dane as $row){
        $html .= "<li>{$row[1]} data: {$row[2]} ilość miejsc: {$row[3]} cena: {$row[4]}zł</li>\n";
    }
    return $html."</ul>";
}
function getAllGrupy():array{
    $conn = getConnection();
    if($conn->connect_errno!=0) return [];
    $sql = "SELECT * FROM grupy";
    $dane = [];
    $result = $conn->query($sql);
    while($row = $result->fetch_row()){
        $dane[] = $row;
    }
    $conn->close();
    return $dane;
}
function grupyToSelect(array $grupy):string{
    $html = "<select name='grupaId'>\n";
    foreach($grupy as $row){
        $html .= "\t<option value='{$row[0]}'>{$row[1]} opis: {$row[2]}zł</option>\n";
    }
    return $html."</select>\n";
}
function wycieczkiToSelect(array $wycieczki):string{
    $html = "<select name='wycieczkaId'>\n";
    foreach($wycieczki as $row){
        $html .= "\t<option value='{$row[0]}'>{$row[1]} cena: {$row[4]}zł</option>\n";
    }
    return $html."</select>\n";
}