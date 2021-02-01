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
       return $this->getMarka().'|'.$this->getMiejsca().'|'.$this->getRokProdukcji()
         .'|'.$this->getCena().PHP_EOL;
    }
   public function __destruct()
   {
       echo "<h3>Usuwanie obiektu</h3>";
   }
         
    public function getMarka():string
    {
            return $this->marka;
    }
    
    public function getMiejsca():int
    {
        return $this->miejsca;
    }

    public function getRokProdukcji():int
    {
        return $this->rokProdukcji;
    }

    public function getCena():float
    {
        return $this->cena;
    }
}