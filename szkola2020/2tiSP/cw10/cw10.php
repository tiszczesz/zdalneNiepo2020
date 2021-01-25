<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Film{ //def klasy(typu) Film
        //pola klasy
        private string $title = "noname";
        private string $author = "noname";
        private int $length = 100;

        //metody klasy
        public function setTitle(string $title):void {
            $this->title = $title;
        }
        public function getTitle():string {
            return $this->title;
        }
        public function setAuthor(string $author):void {
           $this->author = $author;
        }
        public function getAuthor():string {
            return $this->author;
        }
        public function getLength():int  {
            return $this->length;
        }
        public function setLength(int $length):void  {
           $this->length = $length>0 ? $length : -$length;
        }
        public function __toString():string
        {
            return "<span style='color:green'><b>{$this->getTitle()}</b> autor: <b>{$this->getAuthor()}</b> "
                  ."długość trwania filmu: {$this->getLength()} min.</span>";  
        }
       public function __construct(string $title="noname",string $author="noname", int $length=100)
       {
           echo "<div>Wywołanie konstruktora</div>";
           $this->setTitle($title);
           $this->setAuthor($author);
           $this->setLength($length);
       }
    }
    $f1 = new Film();//utworzenie obiektu typu Film
    $f1->setTitle("Tomasz z gór");
    $f1->setAuthor("Jan Nowak");
    $f1->setLength(-100);
    echo "<div>{$f1}</div>";
    ?>
</body>
</html>