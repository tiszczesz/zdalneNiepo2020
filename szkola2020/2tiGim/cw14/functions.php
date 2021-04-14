<?php
function getConnection():?mysqli {
    $conn = new mysqli("localhost","root",null,'2tigim_cw1');
    if($conn->connect_errno!==0) return null;
    $conn->set_charset("utf8");
    return $conn;
}

function getAll():array {
    $conn = getConnection();
    if($conn==null){
        return [];
    }
    $dane = [];
    $sqlSelect = "SELECT firstName ,lastName FROM contacts";
    $r = $conn->query($sqlSelect);
    if(!$r) return [];
    while($row = $r->fetch_row()){
        $dane[] = $row;
    }
    $conn->close();
    return $dane;
}
function daneToHTML(array $dane):string {
    $html = "<ul>";
    foreach($dane as $row){
        $html .= "<li>{$row[0]} {$row[1]}</li>";
    }

    return $html."</ul>";
}