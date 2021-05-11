<?php
function &getConnection():?mysqli {
    $conn = new mysqli("localhost","root",null,"2tisp_cw1");
    if($conn->connect_errno!=0){
        return null;
    }
    //$conn->query("SET NAMES utf8");
    $conn->set_charset("utf8");
    return $conn;
}
function getAllBooks():array {
    $conn = getConnection();
    if($conn === null) return [];
    $data = [];
    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);
    if($result){
        while($row = $result->fetch_row()){
            $data[] = $row;
        }
    }
    $conn->close();
    return $data;
}
function booksToTable(array $books):string {
    $html = "<table class='table table-striped table-bordered'>";
    $html .= "<tr><th>Lp</th><th>Tytuł</th><th>Autor</th><th>Cena</th><th>Operacje</th></tr>";
    $lp = 0;
    $sum = 0;
    foreach($books as $b){
        $lp++;
        $sum += $b[3];
        $html .= "<tr><td class='text-end'>{$lp}</td><td>{$b[1]}</td><td>{$b[2]}</td><td class='text-end'>{$b[3]}</td><td></td></tr>";
    }

    return $html."<tr class='fw-bold'><td class='text-end' colspan='3'>Suma:</td><td class='text-end'>{$sum}</td></tr></table>";
}