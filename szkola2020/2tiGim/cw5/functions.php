<?php
function InsertIntoText(string $text, string $char): string
{
    $result = "";
    $wyrazy = explode(" ", $text);   
    
    foreach ($wyrazy as $wyraz) {      
        for ($i = 0; $i < mb_strlen($wyraz); $i++) {
            $t = $i < (mb_strlen($wyraz) - 1) ? $char : "";
            $result .= mb_substr($wyraz, $i, 1) . $t;
        }
        $result.=" ";
    }

    return $result;
}
