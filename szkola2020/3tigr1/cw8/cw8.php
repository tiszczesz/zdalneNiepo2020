<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasy w php cz1</title>
    <style>
        .film-info {
            padding: 10px;
            margin-left: 30px;
            border: solid green 1px;
        }
    </style>
</head>

<body>
    <h1>Klasy w php cz1</h1>
    <?php
    //todo zdefiniowac klase Car z polami marka,cena,....
    class Film
    {
        //pola
        private string $title = "noname";
        private int $length = 90;
        private float $price = 100.99;

        //metody
        public function Info(): string
        {
            return "<h3 class='film-info'>{$this->title} długość filmu: {$this->length} min, cena: {$this->price} zł</h3>";
        }

        public function setTitle(string $title): void
        {
            $this->title = $title;
        }
        public function setPrice(float $price): void
        {
            $this->price = $price < 0 ? -$price : $price;
        }
        public function setLength(int $length): void
        {
            $this->length = ($length < 0 || $length > 500) ? 100 : $length;
        }

        public function getTitle(): string
        {
            return $this->title;
        }

        public function getPrice(): float
        {
            return $this->price;
        }
        public function getLength(int $length): int
        {
            return $this->length;
        }
        public function __construct(string $title = "noname",int $length=90,float $price = 100.99)
        {
            echo "<h2>Wywołanie konstruktora</h2>";
            $this->setTitle($title);
            $this->setLength($length);
            $this->setPrice($price);
        }
    }
    $f1 = new Film();
    $f2 = new Film("Akwarium",130,50.99);
    echo $f1->Info();
    echo $f2->Info();
    $f1->setTitle("Dziwny film 22");
    $f1->setPrice(-45.90);
    $f1->setLength(120);
    //var_dump($f1);
   // var_dump($f2);
    echo $f1->Info();
    echo $f2->Info();
    ?>
</body>

</html>