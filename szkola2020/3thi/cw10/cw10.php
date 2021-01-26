<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .game-info{padding: 8px; color: green; background-color: lightgreen;}
    </style>
</head>
<body>
    <?php
    class Game{
        //pola klasy
        private string $title = "noname";
        private float $price = 0;
        private string $category = "noname";

        //metody
        public function Info():string{
            return "<p>{$this->title} kategoria: {$this->category} cena: {$this->price} zł</p>";
        }
        public function setTitle(string $title):void{
            $this->title = $title;
        }
        public function setPrice(float $price):void 
        {
            $this->price = $price < 0 ? -$price : $price;
        }
        public function setCategory(string $category):void 
        {
           $this->category = $category;
        }
        public function __toString():string
        {
           return "<div class='game-info'><b>{$this->title}</b> gatunek: <b>{$this->category}</b> cena: <i>{$this->price}</i> zł</div>";
        }
        public function __construct(string $title="noname",string $category="noname",float $price=0) {
            echo "<h3>Wywołanie konstruktora!!!!</h3>";
            $this->setTitle($title);
            $this->setCategory($category);
            $this->setPrice($price);
        }
      
    }
    //todo Klasa Article z polami content, category, date, style
    $g1 = new Game("Worms","Fajny",12.99);
    $g2 = new Game();
    $g3 = new Game();
    $g3->setTitle("Fajna 3 gra!!");
    $g3->setPrice(45.90);
    echo $g1;
    echo $g2->Info();
    echo $g3->Info();
    $g3->setCategory("Co za RPG") ;

    echo $g3->Info();
    echo "<div>{$g3}</div>";
    
    ?>
</body>
</html>