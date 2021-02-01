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
}
