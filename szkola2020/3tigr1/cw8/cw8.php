<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasy w php cz1</title>
    <style>
        .film-info{ padding: 10px; margin-left: 30px;border: solid green 1px;}
    </style>
</head>
<body>
    <h1>Klasy w php cz1</h1>
    <?php
    class Film{
        //pola
        private string $title="noname";
        private int $length = 90;
        private float $price = 100.99;

        //metody
        public function Info():string {
            return "<h3 class='film-info'>{$this->title} długość filmu: {$this->length} cena: {$this->price} zł</h3>";
        }
        //todo metody dostępowe 
    }
    $f1 = new Film();
    $f2 = new Film();
    
    $f1->title = "Dziwny film 22";
    $f1->price = 45.90;
    $f1->length = 120;
    var_dump($f1);
    var_dump($f2);
    echo $f1->Info();
    echo $f2->Info();
    ?>
</body>
</html>