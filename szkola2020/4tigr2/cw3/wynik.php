<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require "functions.php";
var_dump($_POST);
if(isset($_POST['imie'])){
    $imie = trim($_POST['imie']);
    $nazwisko = trim($_POST['nazwisko']);
    $opis = trim($_POST['opis']);
    $ulica = trim($_POST['ulica']);
    $miasto = trim($_POST['miasto']);
    $id = insertToPracownicy($imie,$nazwisko,$opis);
    if($id){
        insertToAdresy($id,$miasto,$ulica);
    }

}
?>
<div><a href='lista.php'>Lista pracowników</a></div>
</body>
</html>
