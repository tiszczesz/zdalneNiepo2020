<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Person{
        protected string $firsName;
        protected string $lastName;
        protected int $age;
        public function __construct(string $firsName = "Adam",string $lastName = "Nowak",int $age = 20)
        {
            echo "<p>Konstruktor klasy Person</p>";
           $this->firsName = $firsName;
           $this->lastName = $lastName;
           $this->age = $age;
        }
        public function __toString():string
        {
            return "<div>{$this->firsName} {$this->lastName} wiek: {$this->age}</div>";
        }
    }
    class Student extends Person{
        private float $avg;
        public function __construct(float $avg = 4.5,string $firsName = "Adam",string $lastName = "Nowak",int $age = 20)
        {
            parent::__construct($firsName,$lastName,$age);
            $this->avg = $avg;
            echo "<p>Konstruktor klasy Student</p>";
        }
        public function __toString():string
        {
            return parent::__toString()."<div>Średnia ocen: {$this->avg}</div>";
        }
    }
    //todo klasa Worker dziedziczaca po Person z polami stanowisko i pensja
    $s1 = new Student();
    echo $s1;
    var_dump($s1);
    $p2 = new Person("Anna","Małecka",23);
    echo $p2;
    ?>
</body>
</html>