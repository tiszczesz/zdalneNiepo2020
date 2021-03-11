<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ćwiczenie 11 - dziedziczenie</title>
</head>
<body>
    <h1>Ćwiczenie 11 - dziedziczenie</h1>
    <?php
     interface IEating{
      //   function excrete();
        function eat(string $dish);
        //todo dopisac drugą funkcję zwiazaną z wydalaniem produktów ubocznych....
    }
    abstract class Animal implements IEating{
        protected float $mass;
        protected string $name;
        public function __construct(string $name = "noname",float $mass = 10)
        {
            echo "Tworzenie obiektu zwierzaka<br>";
            $this->name = $name;
            $this->mass = $mass;
        }
        public function __toString():string
        {
            return "<div>Nazwa: {$this->name} masa: {$this->mass} kg</div>";
        }
        public function __destruct()
        {
            echo "Usuwanie obiektu zwierzaka<br>";
        }
    }
    class Cat extends Animal{
        private string $breed;
        public function __construct(string $breed="dachowiec",string $name = "noname",float $mass = 10)
        {
           parent::__construct($name,$mass);
           echo "Tworzenie obiektu kot<br>";
           $this->breed = $breed;
        }
        public function __destruct()
        {
            echo "Usuwanie obiektu kot<br>";
        }
        public function __toString():string
        {
            return parent::__toString()."<div>Rasa kota: {$this->breed} </div>";
        }
        public function eat(string $dish)
        {
           echo "<div>Kotek smacznie zajada: {$dish}</div>";
        }
    }

    class Person implements IEating{
        private string $firstName;
        private string $lastName;
        private int $age;
        public function __construct(string $firstName = "Jan",string $lastName = "Kowalski",int $age = 20)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age;
        }
        public function __toString():string
        {
            return "<div>Człowiek: {$this->firstName}  {$this->lastName} wiek: {$this->age}</div>";
        }
        public function eat(string $dish)
        {
           echo "<div>Człowieczek smacznie szama: {$dish}</div>";
        }
    }
    class Plant implements IEating{
        private float $height;        
        
        function __construct(float $height=12.5)
        {
            $this->height = $height;
        }
        public function __toString():string
        {
            return "<div>Roślina o wysokości : {$this->height} cm</div>";
        }
        public function eat(string $dish)
        {
            echo "<div>Podlewanie: {$dish} roślinki o wysokości: {$this->height} aż urośnie</div>";
        }
    }

    $c1 = new Cat("muchaty","koteczek",6.5);
  
    echo $c1;
    
    var_dump($c1);
    $c1->eat("mleko");
    $p1 = new Person();
    $r1 = new Plant(100);
    echo $p1;
    $p1->eat("Mięcho!!");
    $r1->eat("H2O");
    //todo napisac klase pies dziedziczaca z Animal z cechą temperament string

    ?>
</body>
</html>