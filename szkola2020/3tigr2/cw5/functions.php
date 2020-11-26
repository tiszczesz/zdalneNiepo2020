<?php
function insertChar(string $tt,string $c):string{
    $wyrazy = explode(' ',$tt);
//var_dump($wyrazy);
    $wynik = "";
    foreach($wyrazy as $t){
            $length = mb_strlen($t);
        for($i=0;$i<$length-1;$i++){
            $wynik .= mb_substr($t,$i,1).$c;
        }
        $wynik.=mb_substr($t,$length-1,1).' ';
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
function reverse2(string $t):string{
    $arrayStr = mb_str_split($t);
   // var_dump($arrayStr);
   return implode('',array_reverse($arrayStr));
}
function mb_str_split2(string $t):array{
    $wynik = [];
    for($i=0;$i<mb_strlen($t);$i++){
        $wynik[] = mb_substr($t,$i,1);
    }
    return $wynik;
}
function countAlpha(string $t):int{
    
}
