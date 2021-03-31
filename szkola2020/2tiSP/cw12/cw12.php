<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .red{color:red;}
    </style>
    <title>Ćwiczenie 12 - dziedziczenie</title>
</head>
<body>
    <h1>Ćwiczenie 12 - dziedziczenie</h1>
    <?php
    interface ISpeed{
        function getSpeed(): float;
    }
    class Animal implements ISpeed{
        protected string $name = "noname";
        protected float $speed;
        protected float $weight = 10;
        public function __construct(string $name="noname",float $weight = 10,float $speed = 5)
        {
            echo "Wywolanie konstruktora Animal<br>";
            $this->name = $name;
            $this->weight = $weight;
            $this->speed = $speed;
        }
        public function __toString():string
        {
            return "<div>nazwa: <span class='red'>{$this->name}</span> masa: {$this->weight} kg prędkość zwierzaka: {$this->getSpeed()} km/h</div>";
        }
        public function __destruct()
        {
            echo "Wywolanie destruktora Animal<br>";
        }
        public function getSpeed():float
        {
            return $this->speed;
        }
    }
    class Dog extends Animal {
        private string $breed;
        public function __construct(string $breed="mieszaniec",string $name="noname",float $weight = 10,float $speed = 5)
        {
            parent::__construct($name,$weight,$speed);
            echo "Wywolanie konstruktora Dog<br>";            
            $this->breed = $breed;
        }
        public function __destruct()
        {
            echo "Wywolanie destruktora Dog<br>";
        }
        public function __toString():string
        {
            return parent::__toString()."<div>rasa: {$this->breed} </div>";
        }
    }
    class Cat extends Animal{
        private string $fur;
        public function __construct(string $fur="krótka",string $name="noname",float $weight = 10,float $speed = 5)
        {
            parent::__construct($name,$weight,$speed);
            echo "Wywolanie konstruktora Cat<br>";            
            $this->fur = $fur;
        }
        public function __destruct()
        {
            echo "Wywolanie destruktora Cat<br>";
        }
        public function __toString():string
        {
            return parent::__toString()."<div>rodzaj sierści: {$this->fur} </div>";
        }

    }
    //todo utworzenie klasy pochodnej Cat (z polem rodzaj siersci ()) GOGOGO!!!!!!!
    $animals = [new Dog(),new Cat("bardzo długa","kocior",5,7.5),new Dog("mieszaniec","psiak",12,8.5),new Cat("fff","Gepard",12,120)];

    foreach($animals as $a){
        echo $a;
    }
    function getMaxSpeedAnimal(array $dane):?Animal{
        if(count($dane)==0) return null;
        $result = $dane[0];
        foreach($dane as $a){
            if($a->getSpeed()>$result->getSpeed()){
                $result = $a;
            }
        }
        return $result;
    }
     
    $wynik = getMaxSpeedAnimal($animals);
    if($wynik===null) echo "Brak danych";
    else{
        echo "<div>Najszybsze zwierze: </div>".$wynik;
    }

    ?>
</body>
</html>