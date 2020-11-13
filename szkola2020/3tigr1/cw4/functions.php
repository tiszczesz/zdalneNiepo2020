<?php
function addSpace(string $dane):string{
    $result = "";
    for($i=0;$i<mb_strlen($dane);$i++){
        $result .= mb_substr($dane,$i,1).' ';
    }
    return $result;
}

