<?php
function getConnection()
{
  $conn = new mysqli("localhost", "root", null, "zdalne4ti_gr2cw99");
  if ($conn->connect_errno != 0) return null;
  $conn->query("SET NAMES utf8");
  return $conn;
}
function insertToPracownicy($i, $n, $o)
{
  $conn = getConnection();
  $id = -1;
  if ($conn == null) die("ERROR");
  $sql = "INSERT INTO pracownicy(imie,nazwisko,opis) "
    . "VALUES('{$i}','{$n}','{$o}')";
  $result = $conn->query($sql);
  if ($result) {
    $r2 = $conn->query("SELECT LAST_INSERT_ID()");
    $id = $r2->fetch_row()[0];
  }
  $conn->close();
  return $id;
}
function insertToAdresy($id, $m, $u)
{
  $conn = getConnection();
  if ($id == -1) return false;
  if ($conn == null) die("ERROR");
  $sql = "INSERT INTO adresy(id,miasto,ulica) "
    . "VALUES('{$id}','{$m}','{$u}')";
  $result = $conn->query($sql);
  $conn->close();
  return $result;
}
function getAllWorkersAdr(): array
{
  $conn = getConnection();
  if ($conn == null) die("ERROR");
  $sql = "SELECT pracownicy.id,imie,nazwisko,ulica, miasto FROM pracownicy "
    . "INNER JOIN adresy on pracownicy.id=adresy.id";
  $result = $conn->query($sql);
  $dane = [];
  while ($row = $result->fetch_assoc()) {
    $dane[] = $row;
  }
  $conn->close();
  return $dane;
}
function toTable(array $dane): string
{
  $html = "<table>";
  $html .= "<tr><th>Imię</th><th>Nazwisko</th><th>Ulica</th><th>Miasto</th></tr>";
  foreach ($dane as $row) {
    $html .= "<tr><td>{$row['imie']}</td><td>{$row['nazwisko']}</td>" .
      "<td>{$row['ulica']}</td><td>{$row['miasto']}</td><td><a href='editWorker.php?id={$row['id']}'>Edytuj pracownika</a></td></tr>";
  }
  return $html . "</table>\n";
}
function getWorkerByIdWithAddress(int $id): array
{
  $conn = getConnection();
  if ($conn == null) return [];
  $sql =  "SELECT p.id,imie,p.nazwisko,a.ulica,p.opis, a.miasto FROM pracownicy as p "
    . "INNER JOIN adresy as a on p.id=a.id WHERE p.id={$id}";
   // echo $sql;
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $conn->close();
  //var_dump($row);
  return $row;
}
function getFunkcje():array{
  $conn = getConnection();
  if ($conn == null) return [];
  $sql =  "SELECT * FROM funkcje";
   // echo $sql;
  $result = $conn->query($sql);
  $funkcje = [];
  while($row = $result->fetch_row()){
    $funkcje[]=$row;
  }
  $conn->close();
  //var_dump($row);
  return $funkcje;
}

function funkcjeToList(array $allFun ,array $funById=[]):string{
  $html = "<div>";
  //var_dump($allFun);
  foreach($allFun as $line){
    $checked = in_array($line[0],$funById)? " checked ": "";
    $html .= "<p><input type='checkbox' value='{$line[0]}' name='fun[]' {$checked}> {$line[1]} </p>\n";
  }
  return $html ."</div>";
}
function getFunkcjeByIDPracownika(int $id):array{
  $conn = getConnection();
  if ($conn == null) return [];
  $sql =  "SELECT funkcjaid FROM prac_funkcja WHERE pracownikid={$id}";
   // echo $sql;
  $result = $conn->query($sql);
  var_dump($result);
  $wycieczkiId = [];
  while($row = $result->fetch_row()){
    $wycieczkiId[]=$row[0];
  }
  $conn->close();
  //var_dump($row);
  return $wycieczkiId;
}
