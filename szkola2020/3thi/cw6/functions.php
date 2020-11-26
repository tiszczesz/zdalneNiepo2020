<?php
function InsertChar(string $text, string $c): string
{
    $wyrazy = explode(" ", $text);
   // var_dump($wyrazy);
    $wynik = "";
    foreach ($wyrazy as $w) {
        $length = mb_strlen($w);
        for ($i = 0; $i < $length - 1; $i++) {;
            $wynik .= mb_substr($w, $i, 1) . $c;
        }
        $wynik .= mb_substr($w, $length - 1, 1)." ";
    }

    return $wynik;
}
