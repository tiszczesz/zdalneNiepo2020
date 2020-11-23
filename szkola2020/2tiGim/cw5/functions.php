<?php
function InsertIntoText(string $text, string $char): string
{
    $result = "";
    $wyrazy = explode(" ", $text); //Ala ma kota ->[ Ala, ma, kota]
    foreach ($wyrazy as $wyraz) {      
        for ($i = 0; $i < mb_strlen($wyraz); $i++) {
            $t = $i < (mb_strlen($wyraz) - 1) ? $char : "";
            $result .= mb_substr($wyraz, $i, 1) . $t;
        }
        $result.=" ";
    }
    return $result;
}
function Reverse(string $text):string{
    $result = "";
    $length = mb_strlen($text);
    for ($i = 0; $i < $length; $i++) {        
        $result .= mb_substr($text,$length-$i-1, 1) ;
    }
    return $result;
}
function countAllAlpha(string $text):int{
    $result = 0;
    $polchars = mb_str_split("ąężźćńłóś");
    $length = mb_strlen($text);
    for($i=0;$i<$length;$i++){
        $char = mb_strtolower( mb_substr($text,$i,1));
        if($char>='a' && $char<='z' || in_array($char,$polchars)){
            $result++;
        }
    }
    return $result;
}
function countAllVowels(string $text):int{
    $result = 0;
    $vowels = mb_str_split("aeiouąęy");
    $length = mb_strlen($text);
    for($i=0;$i<$length;$i++){
        $char = mb_strtolower( mb_substr($text,$i,1));
        if( in_array($char,$vowels)){
            $result++;
        }
    }
    return $result;
}
