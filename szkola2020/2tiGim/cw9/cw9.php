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
        public function getFirstName() :string
        {
            return $this->firstName;
        }
        public function getLastName() :string
        {
            return $this->lastName;
        }
        public function setLastName(string $lastName):void
        {
            $this->lastName = $lastName;
        }
        public function getAge():int
        {
            return $this->age;
        }

        public function setAge(int $age):void
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
        public function __toString():string
        {
            return "<span>{$this->getFirstName()} {$this->lastName} wiek: {$this->getAge()}</span>";
        }
    }
    function getOlder(array $people):Person {
        $max = -PHP_INT_MAX;
        $result = null;
        foreach($people as  $p){
            if($p->getAge()>$max){
                $result = $p;
                $max = $p->getAge();
            }
           
        }
        return $result;       
    }
    function diffAge(Person $p1, Person $p2):int{
        return abs($p1->getAge()-$p2->getAge());
    }
    $people = [
        new Person("Adam","Nowak",45),
        new Person("Marian","Hajduk",22),
        new Person("Tomasz","Fryk",48),
        new Person("Teresa","Kowalska",12),
        new Person("Anna","Urych",6)
    ];
    //w c++ musi byc srednik;
    //uzywanie klasy Person do tworzenia obiektow
    $p1 = new Person();
    var_dump($p1);
    $p1->setFirstName("Alojzy");
    var_dump($p1);
    echo "<p>Imię: {$p1->getFirstName()}</p>";
    $p1->setAge(-34);
    var_dump($p1);
    $older = getOlder($people);
    echo "<ul>\n";
    foreach($people as $p){
        echo "<li>{$p}</li>";
    }
    echo "</ul>\n";
    if($older!=null){
        echo "<div>Najstarsza osoba to: {$older}</div>";
    }else{
        echo "<div>Najstarsza osoba ERROR</div>";
    }
    $people[] = new Person("Roman","Boman",67);
    $older = getOlder($people);
    if($older!=null){
        echo "<div>Najstarsza osoba to: {$older}</div>";
    }else{
        echo "<div>Najstarsza osoba ERROR</div>";
    }
    echo "<h3>Różnica wieku dla: {$people[0]} a {$people[count($people)-1]} to "
          .diffAge($people[0],$people[count($people)-1])."</h3>";
    ?>
</body>

</html>