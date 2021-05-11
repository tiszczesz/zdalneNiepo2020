<?php
function &getConnection() :?mysqli{
    $conn = new mysqli("localhost","root",null,'3thi_cw1');
    if($conn->connect_errno!=0) return null;
    $conn->query("SET NAMES utf8");
    return $conn;
}
function getAll():array {
    $conn = getConnection();
    if($conn===null) return [];
    $dane = [];
    
}