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
        $html = "<table class='car-list'>\n";
        $html .= "<tr><th>Marka</th><th>Ilość miejsc</th><th>Rok produkcji</th><th>Cena (PLN)</th><th></th></tr>\n";
        foreach($dane as $car){
            $html .= "<tr><td>{$car->getMarka()}</td><td>{$car->getMiejsca()}</td><td>{$car->getRokProdukcji()}</td>"
            ."<td>{$car->getCena()}</td><td><a href='delete.php?marka={$car->getMarka()}' class='link-button'>Usuń</a>"
            ."<a href='editForm.php?marka={$car->getMarka()}' class='link-button'>Edytuj</a></td></tr>\n";
        }
        return $html."</table>\n";
    }
    public static function carToForm(Car & $c=null):string
    {
        if($c==null){
            $action = "addNewCar.php";
            $marka = "";
            $miejsca = "";
            $rokProdukcji = "";
            $cena = "";
        }else{
            $action = "edit.php";
            $marka = $c->getMarka();
            $miejsca = $c->getMiejsca();
            $rokProdukcji = $c->getRokProdukcji();
            $cena = $c->getCena();
        }
        return <<<TEXT
        <form action="{$action}" method="post">
        <div class="line">
            <label for="marka">Marka: </label>
            <input type="hidden" value="{$marka}" name="oldMarka">
            <input type="text" name="marka" id="marka" value="{$marka}" required>
        </div>
        <div class="line">
            <label for="miejsca">Ilość miejsc: </label>
            <input type="number" name="miejsca" id="miejsca" min="2" value="{$miejsca}" required>
        </div>
        <div class="line">
            <label for="rokProdukcji">Rok produkcji: </label>
            <input type="number" name="rokProdukcji" id="rokProdukcji" min="1880" required value="{$rokProdukcji}">
        </div>
        <div class="line">
            <label for="cena">Cena: </label>
            <input type="number" name="cena" id="cena" min="0" step="0.01" value="{$cena}">
        </div>
        <div class="line">
            <input type="submit" value="Zapisz">
        </div>

    </form>

TEXT;
    }
}
