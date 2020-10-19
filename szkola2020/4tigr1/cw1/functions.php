<?php
function getConnection(){
    $conn = new mysqli("localhost","root",null,"zdalne4tigr1_cw1");
    if($conn->connect_errno!=0) return null;
    $conn->query("SET NAMES utf8");
    return $conn;
}
function getAllDoctors(){
    $conn = getConnection();
    if($conn==null) die("ERROR!!!");
    $sql = "SELECT * from lekarze";
    $dane = [];
    $result = $conn->query($sql);
    while($row=$result->fetch_assoc()){
        $dane[] = $row;
    }
    $conn->close();
    return $dane;
}
function toSelect(array $dane){
    $html = "<select name='lekarzID'>\n";
    foreach($dane as $lekarz){
        $html .= "<option value=\"{$lekarz['id']}\">".
        "{$lekarz['imie']} {$lekarz['nazwisko']} {$lekarz['specjalizacja']}</option>\n";
    }
    return $html."</select>\n";
}
function insertPacjent(array $dane){
    $conn = getConnection();
    if($conn==null) die("ERROR!!!");
    $sql = "INSERT INTO pacjenci(imie,nazwisko,dataWizyty,opis,lekarzID) ".
    " VALUES('{$dane[0]}','{$dane[1]}','{$dane[2]}','{$dane[3]}','{$dane[4]}')";   
   // echo $sql;
    $result = $conn->query($sql);
   
    $conn->close();
    return $dane;
}