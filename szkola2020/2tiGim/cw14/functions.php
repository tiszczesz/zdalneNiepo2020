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
    $sqlSelect = "SELECT * FROM contacts";
    $r = $conn->query($sqlSelect);
    if(!$r) return [];
    while($row = $r->fetch_row()){
        $dane[] = $row;
    }
    $conn->close();
  //  var_dump($dane);
    return $dane;
}
function daneToHTML(array $dane):string {
    $html = "<ul>";
    foreach($dane as $row){
        $html .= "<li>{$row[1]} {$row[2]} email: {$row[3]}</li>";
    }

    return $html."</ul>";
}
function daneToTable(array $dane): string {
    $html = "<table class='table table-hover w-75'>";
    $html .= "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th><th>Email</th><th>Inne</th></tr>";
    $lp = 0;
    foreach($dane as $row){
        $lp++;
        $html .= "<tr><td>{$lp}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td><td></td></tr>";
    }
    return $html."</table>";
}