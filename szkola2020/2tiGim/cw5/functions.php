<?php
function InsertIntoText(string $text,string $char):string{
    $result = "";
    for($i=0; $i < strlen($text);$i++){
        $result .= $text[$i].$char;
    }
    return $result;
}