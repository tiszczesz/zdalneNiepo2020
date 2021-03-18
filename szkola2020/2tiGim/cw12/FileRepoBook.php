<?php
require_once "Book.php";
require_once "configuration.php";
class FileRepoBook{
    private array $books = [];
    private string $pathToFile = DIR.'/'.BOOKS_FILE;

    public function __construct(array& $books=[])
    {
        if(file_exists($this->pathToFile)){
            $this->getFromFile();
        }else{
            $this->books = $books;
        }
        
    }
    public function addBook(Book & $book):void
    {
      $this->books[] = $book;
    }
    protected function getFromFile():void{
        $lines = file($this->pathToFile,FILE_IGNORE_NEW_LINES);
        //var_dump($lines);
       
        foreach($lines as $line){
           $this->books[] =  Book::fromJSON($line);
        }
       
    }
    public function saveAllToFile( ):void {
        $f = fopen($this->pathToFile,'w');
        if(!$f) return ;
        foreach($this->books as $b){
            fwrite($f,$b->toJSON().PHP_EOL);
        }
        fclose($f);
    }
    public function getAllBooks():array
    {
       return $this->books;
    }

}