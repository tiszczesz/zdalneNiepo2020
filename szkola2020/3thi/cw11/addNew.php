<?php
if(isset($_POST['title'])){
    echo "OK";
}else{
    header("Location: addNew.html");
}