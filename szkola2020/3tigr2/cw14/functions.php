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
function getSelect():?string {
    $conn = getConnection();
    if($conn==null) return null;
    $sql = "SELECT * FROM dzial";
    $result = $conn->query($sql);
    $html = "<select name='dzial' class='form-select'>";    
    if($result){
       while($row = $result->fetch_row()){
           //var_dump($row);
            $html .= "<option value='{$row[0]}'>{$row[1]}</option>";
       }
    }
    $conn->close();
    return $html."</select>";
}
function insertWorker(string $imie,string $nazwisko, int $dzial):?bool {
    $conn = getConnection();
    if($conn==null) return null; 
    $sql = "INSERT INTO pracownik(Nazwisko,Imie,Dzial_id) "
     ." VALUES('{$imie}','{$nazwisko}',{$dzial})";
    // echo $sql;
     $result = $conn->query($sql);
    //todo
    $conn->close();
    return $result;
}
