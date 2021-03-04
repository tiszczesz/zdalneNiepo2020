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
    class Animal{
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
    }
    $z1 = new Animal("Krówka",500);
    $c1 = new Cat("muchaty","koteczek",6.5);
    echo $z1;
    echo $c1;
    var_dump($z1);
    var_dump($c1);

    //todo napisac klase pies dziedziczaca z Animal z cechą temperament string

    ?>
</body>
</html>