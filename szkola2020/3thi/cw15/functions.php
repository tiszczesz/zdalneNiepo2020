<?php
function &getConnection() :?mysqli{
    $conn = new mysqli("localhost","root",null,'3thi_cw1');
    if($conn->connect_errno!=0) return null;
    $conn->query("SET NAMES utf8");
    return $conn;
}
function getAll():array {
    $conn = getConnection();
    if($conn===null) return [];
    $dane = [];
    $sql = "SELECT * FROM persons";
    $result = $conn->query($sql);
    if($result){
        while($row = $result->fetch_row()){
            $dane[] = $row;
        }
    }
    return $dane;
}
function toTable(array $dane):string {
    $html = "<table class='table'><tr><th>Lp</th><th>Imię</th>"
         ."<th>Nazwisko</th><th>Telefon</th><th>operacje</th></tr>";
    $lp = 0;
    foreach($dane as $row){
        $lp++;
        $html .= "<tr><td>{$lp}</td><td>{$row[1]}</td>"
               ."<td>{$row[2]}<td>{$row[3]}".
                "<td><a class='btn btn-secondary' href='delete.php?id={$row[0]}'>Usuń</a>"
                ." <a class='btn btn-primary' href='edit.php?id={$row[0]}'>Edytuj</a></td></tr>";
    }
    return $html."</table>";
}
function addNewContact(string $firstName, string $lastName, 
                      string $phone):void {
                        //TODO
}