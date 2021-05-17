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
        $html .= "<tr><td class='text-end'>{$lp}</td><td>{$b[1]}</td><td>{$b[2]}</td><td class='text-end'>{$b[3]}</td>"
           ."<td><a class='btn btn-danger' href='deleteBook.php?id={$b[0]}'>Usuń</a>"
               ." <a class='btn btn-primary' href='editBook.php?id={$b[0]}'>Edytuj</a></td></tr>";
    }
    $avg =$lp>0 ?  $sum/$lp : "Brak danych";
    $max = getMaxPrice();
    $min = getMinPrice();
    $html .= "<tr class='fw-bold'><td class='text-end' colspan='3'>Max:</td><td class='text-end'>{$max}</td></tr>";
    $html .= "<tr class='fw-bold'><td class='text-end' colspan='3'>Min:</td><td class='text-end'>{$min}</td></tr>";
    $html .= "<tr class='fw-bold'><td class='text-end' colspan='3'>Średnia:</td><td class='text-end'>{$avg}</td></tr>";
    return $html."<tr class='fw-bold'><td class='text-end' colspan='3'>Suma:</td><td class='text-end'>{$sum}</td></tr></table>";
}
function getMaxPrice():float {
    $conn = getConnection();
    if($conn==null) return 0;
    $sql = "SELECT max(price) FROM books";
    $result = $conn->query($sql);
    $max = $result ? $result->fetch_row()[0] : 0;
    $conn->close();
    return $max;

}
function deleteBook(int $id) :bool {
    $conn = getConnection();
    if($conn==null) return false;
    $sql = "DELETE FROM books WHERE id={$id}";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
function getMinPrice():float {
    $conn = getConnection();
    if($conn==null) return 0;
    $sql = "SELECT min(price) FROM books";
    $result = $conn->query($sql);
    $max = $result ? $result->fetch_row()[0] : 0;
    $conn->close();
    return $max;

}