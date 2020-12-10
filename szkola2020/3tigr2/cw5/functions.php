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
    $znakiPL = mb_str_split("ąężćśółźĄĘŹŻŚĆŁÓ");
    $length = mb_strlen($t);
    $wynik = 0;
    for($i=0;$i<$length;$i++){
        $char = mb_substr($t,$i,1);
        if($char>='a' && $char<='z' || $char>='A' && $char<='Z' || in_array($char,$znakiPL)  ){
            $wynik++;
        }
    }
    return $wynik;
}
function getRandom():string{
    $teksty = [
        "obrego syna nigdy Bóg nie zapomina",
        "czerwiec po deszczowym maju często dżdżysty w naszym kraju",
        "gdy pająk w lipcu przychodzi, to za sobą deszcz przywodzi, gdy swą pajęczynę snuje, bliską burzę czuje",
        "dobra i wdowa, gdy młoda i zdrowa",
        "z braku laku dobry kit",
        "w Warszawie, w Krakowie i we Lwowie, kto bez grosza, głodu się dowie",
        "znać kota po pazurach"
    ];
    $id = array_rand($teksty);
    return $teksty[$id];
}
