<?php
function addSpace(string $dane, string $char = " "): string
{
    $result = "";
    $wyrazy = explode(" ", $dane);
  //  var_dump($wyrazy);
    foreach ($wyrazy as $w) {
        for ($i = 0; $i < mb_strlen($w); $i++) {
            $znak = $i < (mb_strlen($w) - 1) ? $char : "";
            $result .= mb_substr($w, $i, 1) . $znak;
        }
        $result.=" ";
    }

    return $result;
}
function Reverse(string $text):string{
    $wynik = "";
    $length = mb_strlen($text);
    for($i=0;$i<$length;$i++){
        $wynik.=mb_substr($text,$length-1-$i,1);
    }
    return $wynik;
}
function Reverse2(string $text):string{
   return implode("",array_reverse(mb_str_split($text)));
}
function countAlpha(string $text):int{
    $polskie = mb_str_split("ąężźćńłóĄĘŻŹĆŃŁÓ");
    $result = 0;
    for($i=0;$i<mb_strlen($text);$i++){
        $char = mb_substr($text,$i,1);
        if(($char>='a' && $char<='z') || ($char>='A' && $char<='Z') || in_array($char,$polskie)){
            $result++;
        }
    }
    return $result;
}
function countVowels(string $text):int{
    $result = 0;
    $vowels = str_split("aeiouy");
   // var_dump($vowels);
    for($i=0;$i<mb_strlen($text);$i++){
        $char = mb_substr($text,$i,1);
      //  var_dump(strtolower($char));
        if(in_array(strtolower($char),$vowels)){
            $result++;
        }
    }
    return $result;
}
function getRandomText():string{
    $teksty = [
        "a co po czyjej wielkości, jak nie ma w głowie mądrości.",
        "ani kura za darmo nie gdacze.",
        "dopóty dzban wodę nosi, dopóki mu się ucho nie urwie",
        "gdy przyjdzie święta Agnieszka, przebije lód ogonem pliszka",
        "do siostry w rok szósty, do brata we trzy lata",
        "gdy się diabeł zestarzeje, chce zostać mnichem",
        "chleb stracił, a bułki nie znalazł",
        "wszędzie dobrze, ale w domu najlepiej"
    ];
    return $teksty[array_rand($teksty)];
}
function Search(string $t, string $s):string{
    $k = mb_strpos($t,$s);
    return $k===false ? "<p>Nie znaleziono w tekście \"{$t}\" frazy: \"{$s}\"</p>"
       :"<p>Znaleziono w tekście <b>\"{$t}\"</b> frazę: <b>\"{$s}\"</b> na miejscu <b>{$k}</b></p>";
}