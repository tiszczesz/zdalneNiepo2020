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
    public static function carToForm(Car & $c=null):string
    {
        return <<<TEXT
        <form action="" method="post">
        <div class="line">
            <label for="marka">Marka: </label>
            <input type="text" name="marka" id="marka" required>
        </div>
        <div class="line">
            <label for="miejsca">Ilość miejsc: </label>
            <input type="number" name="miejsca" id="miejsca" min="2" required>
        </div>
        <div class="line">
            <label for="rokProdukcji">Rok produkcji: </label>
            <input type="number" name="rokProdukcji" id="rokProdukcji" min="1880" required>
        </div>
        <div class="line">
            <label for="cena">Cena: </label>
            <input type="number" name="cena" id="cena" min="0" step="0.01">
        </div>
        <div class="line">
            <input type="submit" value="Zapisz">
        </div>

    </form>

TEXT;
    }
}
