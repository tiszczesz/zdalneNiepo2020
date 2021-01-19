<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    }
    $g1 = new Game();
    $g2 = new Game();
    $g3 = new Game();
    $g3->setTitle("Fajna 3 gra!!");
    $g3->price = 45.90;

    echo $g3->Info();
    $g3->category = "Co za RPG";

    echo $g3->Info();
    
    ?>
</body>
</html>