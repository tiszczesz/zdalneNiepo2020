<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ćwiczenie 12 - dziedziczenie</title>
</head>
<body>
    <h1>Ćwiczenie 12 - dziedziczenie</h1>
    <?php
    class Animal{
        protected string $name = "noname";
        protected float $weight = 10;
        public function __construct(string $name="noname",float $weight = 10)
        {
            echo "Wywolanie konstruktora Animal<br>";
            $this->name = $name;
            $this->weight = $weight;
        }
        public function __toString():string
        {
            return "<div>nazwa: {$this->name} masa: {$this->weight} kg</div>";
        }
        public function __destruct()
        {
            echo "Wywolanie destruktora Animal<br>";
        }
    }
    class Dog extends Animal {
        private string $breed;
        public function __construct(string $breed="mieszaniec",string $name="noname",float $weight = 10)
        {
            parent::__construct($name,$weight);
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
    //todo utworzenie klasy pochodnej Cat (z polem rodzaj siersci ()) GOGOGO!!!!!!!
    $a = new Animal();
    echo $a;
    var_dump($a);
    $d = new Dog();
    var_dump($d);
    echo $d;
    ?>
</body>
</html>