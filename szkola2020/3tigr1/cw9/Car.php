<?php
class Car{
    private string $marka;
    private int $miejsca;
    private int $rokProdukcji;
    private float $cena;

    public function __construct(string $marka="Fiat",int $miejsca=5,int $rokProdukcji=2020,float $cena=50000)    {
       $this->marka = $marka;
       $this->miejsca = $miejsca;
       $this->rokProdukcji = $rokProdukcji;
       $this->cena = $cena;
    }
    public function __toString():string {
        return "<div class='car-info'><b>{$this->marka}</b> ilość miejsc: <b>{$this->miejsca}</b> "
            ."rok produkcji: <i>{$this->rokProdukcji}</i> w cenie: <b>{$this->cena} zł</b></div>";
    }
   public function __destruct()
   {
       echo "<h3>Usuwanie obiektu</h3>";
   }
}