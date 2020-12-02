<?php
function insertChar(string $t, string $z):string{
    $wyrazy = explode(" ",$t);
    $wynik = "";
    foreach($wyrazy as $item){
        for($i=0;$i<mb_strlen($item);$i++){

        $wynik .= mb_substr($item,$i,1);
        if($i<mb_strlen($item)-1) $wynik.=$z;
    }
    $wynik.=" ";
    }
    
    return $wynik;
}
function reverse(string $t):string{
    $wynik = "";
    $length = mb_strlen($t);
    for($i=0;$i<$length;$i++){
        $wynik .= mb_substr($t,-($i+1),1);
    }
    return $wynik;
}