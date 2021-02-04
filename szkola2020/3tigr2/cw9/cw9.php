<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Book{//def klasy
        //pola klasy
        private string $title;
        private string $author;
        private float $price;

        //metody
        public function setTitle(string $title):void {
            $this->title = mb_strtoupper($title);
        }
        public function setPrice(float $price):void
        {
            $this->price = $price < 0 ? -$price : $price;
        }
        public function setAuthor(string $author):void  
        {
            $this->author = $author;
        }
        public function getTitle():string
        {
           return $this->title;
        }
        public function __construct(string $title="noname",string $author="noname",float $price=0)
        {
            echo "<div>To ja konstruktor!!!!</div>";
            $this->setTitle($title);
            $this->setAuthor($author);
            $this->setPrice($price);
        }
        public function __toString():string
        {
            return "<div><b>{$this->getTitle()}</b> autor: <b>{$this->author}</b> w cenie: <i>{$this->price}</i> zł</div>";
        }
    }

    $b1 = new Book(); //utworzenie obiektu typu Book
    $b2  = new Book("fajny tytuł","Roman Boman",39.99);
    $b1->setTitle("ABC gotowania");
    $b1->setPrice(45.90);
    $b1->setAuthor("Roman Polak");
    echo $b1;
    echo $b2;
    ?>
</body>
</html>