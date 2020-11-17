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
function getAllWorkersAdr():array{
  $conn = getConnection();  
  if($conn==null) die("ERROR");
  $sql = "SELECT imie,nazwisko,ulica, miasto FROM pracownicy "
          ."INNER JOIN adresy on pracownicy.id=adresy.id";
  $result = $conn->query($sql); 
  $dane = [];
  while($row = $result->fetch_assoc()){
    $dane[] = $row;
  }   
  $conn->close();
  return $dane;
}
function toTable(array $dane):string{
  $html = "<table>";
  $html .= "<tr><th>Imię</th><th>Nazwisko</th><th>Ulica</th><th>Miasto</th></tr>";
  foreach($dane as $row){
    $html .= "<tr><td>{$row['imie']}</td><td>{$row['nazwisko']}</td>".
    "<td>{$row['ulica']}</td><td>{$row['miasto']}</td></tr>";
  }
  return $html."</table>\n";
}