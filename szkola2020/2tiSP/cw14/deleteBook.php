<?php
require_once "functions.php";
if(filter_has_var(INPUT_GET,"id")){
    $id = filter_input(INPUT_GET,"id",FILTER_VALIDATE_INT);
    $result = deleteBook($id);
}
header("Location: cw14.php");