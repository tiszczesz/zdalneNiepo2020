<?php
//typy danych
//int float string mixed bool array obiekty
$i=1;   $i=23.6 ; $i=false;     class T{private int $i=9;}
var_dump($zmienna); // sprawdzenie zawartosci i typu zmiennej
//tablica   
$t = [23,67,"aaaa",[4,6,7],false]; $t[60] = "ttt";
$tassoc = ["jeden"=>34,"grupa"=>"ala ma kota" ,"tab"=>[3,6,7,8]]; // klucz=>wartosc
$d = date("d-m-Y",8999);
//obiekty
class punkt{
    public $x;
    public  $y; 
public function __construct(){/* tresc*/} 
}
//petle i instrukcje warunkowe tak samo wszedzie
foreach($zbior as $element){/*....*/}; foreach($zbior as $k=>$element){/*....*/}
//np 
do{   echo "gggg";}while($i<10);
//operacje na plikach
$zawartosc = file("dane.txt"); // z pliku do tablicy liniami tekstu
$f = fopen("plik.txt","r"); //otwarcie pliku do r->odczyt w->zapis(od poczatku) a->dopisywanie do pliku
fclose($f); //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
fwrite($f,$line);// -> zapis do pliku zawartosci $line
$line = fgets($f); // odczyt z otwatego wczesniej pliku  lini tekstu do $line
//bazy danych
$conn = new mysqli("localhost","root",null,"BazaDanych"); // otwarcie połączenia do bazy
$conn->query("SET NAMES utf8"); //zapytanie do bazy ustawiające kodowanie utf8
$result = $conn->query("Jakas komenda sql"); //zapytanie do bazy i efekt do zmiennej result (obiekt)
while($row=$result->fetch_row()){/* cos robimy za danymi z $row*/} //zawsze zwraca TABLICE nawet count() avg();
                                                                    // chćby tab jednoelementową

$result = $conn->query("SELECT sum(cena) FROM towary");       // --> ["kowalski"]                                                             
$suma = $result->fetch_row()[0];
$conn->close();  //!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//operatory
//+ - * / =  += -= *=   $a /= $b -> $a = $a/$b;
// != == > < >= <=   // potrojne sprawdzaja tez TYP  '1'===1 (false) '2'==2 (true)   tez w js intval("0")


