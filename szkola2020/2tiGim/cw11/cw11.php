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
    class Document{
        protected string $name;
        protected int $size;
        public function __construct(string $name="noname",int $size=0)
        {
            $this->name = $name;
            $this->size = $size;
        }
        public function __toString():string
        {
            return "Dokument o nazwie: {$this->name} i rozmiarze: {$this->size} ";
        }
    }
    class DocText extends Document{
        private array $lines = [];
        public function __construct(array $lines=[],string $name="noname",int $size=0 )
        {
            parent::__construct($name,$size);
            $this->lines = $lines;
        }
        public  function __toString():string
        {
            $result = parent::__toString()."<br>";
            $result .= "Zawartość dokumentu: <br>";
            foreach($this->lines as $line){
                $result .= $line."<br>\n";
            }
            return $result;
        }
    }//todo napisac klase DocImage(width,height) dziedziczaca z Document
    $d = new DocText(["wewewe","rrrrr fffff ff","try ryryr yr yryr"]);
    var_dump($d);
    echo $d;
    ?>
</body>
</html>