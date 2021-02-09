<?php
require_once "Car.php";
class HtmlCar
{
    public static function carToDiv(Car $c): string
    {
        return "<div class='car-info'><b>{$c->getMarka()}</b> "
            . "ilość miejsc: <b>{$c->getMiejsca()}</b> "
            . "rok produkcji: <i>{$c->getRokProdukcji()}</i>"
            . " w cenie: <b>{$c->getCena()} zł</b></div>";
    }
    public static function allToList(array $dane, bool $isOrdered=false):string 
    {
        $lista = $isOrdered ? "ol" : "ul";
        $html = "<{$lista}>";
        foreach($dane as $item){
            $carHtml = self::carToDiv($item);
            $html .= "<li>{$carHtml}</li>";
        }
        return $html."</{$lista}>";
    }
    public static function allToTable(array $dane):string 
    {
        return "";
    }
}
