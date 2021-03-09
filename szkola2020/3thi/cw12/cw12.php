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
    class Worker{
        protected string $firstName;
        protected string $lastName;
        protected int $age;
        public function __construct(string $firstName = "Jan",string $lastName="Kowalski"
                            ,int $age=20)
        {
            echo "Wywołanie konstruktora klasy: Worker<br>";
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age<0 ? -$age : $age;
        }
        public function __toString():string 
        {
            return "<div>{$this->firstName} {$this->lastName} wiek: {$this->age}</div>";
        }
        public function __destruct()
        {
            echo "Wywolanie destruktora klasy: Worker<br>";
        }
    }
    class Driver extends Worker{
        private string $license;
        public function __construct(string $license, string $firstName = "Jan",string $lastName="Kowalski"
                    ,int $age=20)
        {
           parent::__construct($firstName,$lastName,$age);
           echo "Wywołanie konstruktora klasy: Driver<br>";
           $this->license = $license;
        }
        public function __toString():string
        {
            return parent::__toString()."<div>Prawo jazdy kategoria: {$this->license}</div>";
        }
        public function __destruct()
        {
            echo "Wywolanie destruktora klasy: Driver<br>";
        }
    }
    class Secretary extends Worker{
        private array $skils;
        public function __construct(array $skils = [], string $firstName = "Jan",string $lastName="Kowalski"
        ,int $age=20)
        {
            echo "Wywołanie konstruktora klasy: Secretary<br>";
            parent::__construct($firstName,$lastName,$age);
            $this->skils = $skils;
        }
        public function __toString():string
        {
            $html = "Umiejętności biurowe: <br>";
            if(count($this->skils)>0) {
                foreach($this->skils as $item){
                    $html .= $item.", ";
                }
            }
            else{
                $html .= "Brak umiejętności!!";
            }
            
            return parent::__toString()."<div>{$html}</div>";
        }
        public function __destruct()
        {
            echo "Wywolanie destruktora klasy: Secretary<br>";
        }
    }
    $w1 = new Worker();
    var_dump($w1);
    echo $w1;
    $d2 = new Driver("A,B,C","Adam","Kierowca",34);
    $s3 = new Secretary(["Szybkie pisanie na maszynie","prawo jazdy","...."],"Renata","Rydyk",32);
    var_dump($d2);
    echo $d2;
    var_dump($s3);
    echo $s3;

    
    ?>
</body>
</html>