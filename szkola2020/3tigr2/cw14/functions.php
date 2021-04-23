<?php
function &getConnection(): ?mysqli
{
    $conn = new mysqli("localhost", "root", null, "kl3ti_gr2_cw2");
    if ($conn->connect_errno !== 0) return null;
    $conn->query("SET NAMES utf8");
    return $conn;
}
function getAllWorkers(): array
{
    $conn = getConnection();
    if($conn===null){
        echo "errorDB!!!";
        return [];
    }
    $sqlSelect = "SELECT * FROM pracownik";
    $result = $conn->query($sqlSelect);
    $dane = [];
    if($result==false) return $dane;
    while($row = $result->fetch_assoc()){
        $dane[] = $row;
    }
    $conn->close();
    return $dane;
}
function workersToTable(array $workers):string {
    $html = "<table class='table'>";
    $html .= "<tr><th>Lp</th><th>Imię</th><th>Nazwisko</th><th>Operacje</th></tr>";
    $lp = 0;
    foreach($workers as $w){
        $lp++;
        $html .= "<tr><td>{$lp}</td><td>{$w['Imie']}</td><td>{$w['Nazwisko']}</td></tr>";
    }
    return $html."</table>";
}
