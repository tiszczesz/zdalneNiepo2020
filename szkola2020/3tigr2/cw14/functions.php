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
        $html .= "<tr><td>{$lp}</td><td>{$w['Imie']}</td><td>{$w['Nazwisko']}</td>"
          ."<td><a href='deleteWorker.php?id={$w['Id']}' class='btn btn-danger'>Usuń</a>"
              ." <a href='editeWorker.php?id={$w['Id']}' class='btn btn-primary'>Edytuj</a></td></tr>";
    }
    return $html."</table>";
}
function getSelect(int $id=-1):?string {
    $conn = getConnection($id);
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
function deleteWorker(int $id):bool {
    $conn = getConnection();
    if($conn==null) return false;
    $sql = "DELETE FROM pracownik WHERE Id={$id}";
    $result = $conn->query($sql);
    $conn->close();
    var_dump($result);
    return $result;
}
function workerToForm(array $worker=[],int $id=-1):string {
    if(count($worker)==0){
        $action = "addNewResult.php";
        $imie = "";
        $nazwisko = "";
        $dzialId = -1;        
    }else{
        $action = "editResult.php";
        $imie = $worker[0];
        $nazwisko = $worker[1];
        $dzialId = $worker[2];
        $dzialId=$id;
    }
    $select = getSelect($dzialId);
    $html=<<<TEXT
    <form action="{$action}" method="POST">
    <div class="form-row m-3">
      <label for="imie">Imię: </label>
      <input type="text" name="imie" id="imie" class="form-control" value="{$imie}">
    </div>
    <div class="form-row m-3">
      <label for="nazwisko">Nazwisko: </label>
      <input type="text" name="nazwisko" id="nazwisko"
           class="form-control" value="{$nazwisko}">
    </div>
    <div class="form-row m-3">
      <label for="imie">Dział: </label>
      {$select}
    </div>
    <div class="form-row m-3">

      <input type="submit" class="btn btn-primary w-100" value="Zapisz">
    </div>

  </form>
TEXT;
 return $html;
}
