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
            return "Dokument o nazwie: {$this->name} i rozmiarze: {$this->size}";
        }
    }
    class DocText extends Document{

    }
    $d = new DocText();
    var_dump($d);
    echo $d;
    ?>
</body>
</html>