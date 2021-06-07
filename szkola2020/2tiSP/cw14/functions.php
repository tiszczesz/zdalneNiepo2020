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
function insertBook(string $title,string $author, float $price):bool {
    $conn = getConnection();
    if($conn==null) return false;
    $sql = "INSERT INTO books(title,author,price) VALUES('{$title}','{$author}',{$price})";
    //echo $sql;
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}
function bookToForm(array $b=[]): string {
    if(count($b)==0){
        $action = "addNewBook.php";
        $title = "";
        $author = "";
        $price = "";
    }else{
        $action = "editBookPost.php";
        $title = $b[0];
        $author = $b[1];
        $price = $b[2];
    }
    $html = <<<TEXT
    
     <form action="{$action}" method="post">
         <div class="mb-3 row">
             <label for="title" class="col-sm-2 col-form-label text-end">Tytuł książki:</label>
             <div class="col-sm-10">
               <input type="text" class="form-control" id="title" name="title" value="{$b[0]}">
               <span></span>
             </div>
           </div>
           <div class="mb-3 row">
             <label for="author" class="col-sm-2 col-form-label text-end">Autor:</label>
             <div class="col-sm-10">
               <input type="text" class="form-control" id="author" name="author" value="{$b[1]}">
               <span></span>
             </div>
           </div>
           <div class="mb-3 row">
             <label for="price" class="col-sm-2 col-form-label text-end">Cena:</label>
             <div class="col-sm-10">
               <input type="text" class="form-control" id="price" name="price" value="{$b[2]}">
               <span></span>
             </div>
           </div>
           <div class="mb-3 row">
             <label for="button" class="col-sm-2 col-form-label text-end"></label>
             <div class="col-sm-10">
               <input type="submit" class="btn btn-primary w-25 p-2" id="button"  value="Zapisz">
               <input type="reset" class="btn btn-primary w-25 p-2" id="cancel"  value="Anuluj">
               
             </div>
           </div>
 </form>
 </div>
TEXT;
return $html;
}
function getBookById(int $id):array{
    $conn = getConnection();
    if($conn === null) return [];
    $data = [];
    $sql = "SELECT * FROM books WHERE id={$id}";
    $result = $conn->query($sql);
    if($result){      
            $data = $result->fetch_row();      
    }
    $conn->close();
    return $data; 
}