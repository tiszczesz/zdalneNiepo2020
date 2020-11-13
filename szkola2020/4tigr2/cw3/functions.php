<?php
function getConnection(){
    $conn = new mysqli("localhost","root",null,"zdalne4ti_gr2cw99");
    if($conn->connect_errno!=0) return null;
    $conn->query("SET NAMES utf8");
    return $conn;
}
function insertToPracownicy($i,$n,$o){
    $conn = getConnection();
    $id=-1;
    if($conn==null) die("ERROR");
    $sql = "INSERT INTO pracownicy(imie,nazwisko,opis) "
      ."VALUES('{$i}','{$n}','{$o}')";
    $result = $conn->query($sql);
    if($result){
        $r2 = $conn->query("SELECT LAST_INSERT_ID()");
        $id = $r2->fetch_row()[0];
    }
    $conn->close();
    return $id;
}
function insertToAdresy($id, $m,$u){
    $conn = getConnection();
    if($id==-1) return false;
    if($conn==null) die("ERROR");
    $sql = "INSERT INTO adresy(id,miasto,ulica) "
      ."VALUES('{$id}','{$m}','{$u}')";
    $result = $conn->query($sql);    
    $conn->close();
    return $result;
}