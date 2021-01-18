<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Person
    {
        //fields - wlasciwosc
        private string $firstName = "Tomasz";
        private string $lastName = "Bomasz";
        private int $age = 34;

        //methods
        public function setFirstName(string $firstName): void
        {
            $this->firstName = $firstName;
        }
        public function getFirstName(): string
        {
            return $this->firstName;
        }
        public function getLastName()
        {
            return $this->lastName;
        }
        public function setLastName($lastName)
        {
            $this->lastName = $lastName;
        }
        public function getAge()
        {
            return $this->age;
        }

        public function setAge($age)
        {
            $this->age = $age > 0 ? $age : -$age;
        }
        public function __construct(string $firstName="Adam", 
              string $lastName = "Głowacki",int $age = 25)
        {
            $this->setFirstName($firstName);
            $this->setLastName($lastName);
            $this->setAge($age);
        }
    } //w c++ musi byc srednik;
    //uzywanie klasy Person do tworzenia obiektow
    $p1 = new Person();
    var_dump($p1);
    $p1->setFirstName("Alojzy");
    var_dump($p1);
    echo "<p>Imię: {$p1->getFirstName()}</p>";
    $p1->setAge(-34);
    var_dump($p1);
    ?>
</body>

</html>