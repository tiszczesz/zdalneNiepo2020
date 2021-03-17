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
    public function saveBook(Book & $book):bool
    {
        $f = fopen($this->pathToFile,'a');
        if(!$f) return false;
        fwrite($f,$book->toJSON().PHP_EOL);
        fclose($f);
        return true;
    }
    protected function getFromFile():void{
        $lines = file($this->pathToFile,FILE_IGNORE_NEW_LINES);
        //var_dump($lines);
       
        foreach($lines as $line){
           $this->books[] =  Book::fromJSON($line);
        }
       
    }

}