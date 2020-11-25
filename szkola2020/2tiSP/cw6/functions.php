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