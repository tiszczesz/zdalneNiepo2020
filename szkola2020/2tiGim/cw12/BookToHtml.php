<?php
require_once "FileRepoBook.php";

class BookToHtml{
    public static function toTable(array $books):string
    {
       $html = "<table class='table table-bordered w-100 table-hover'>";
       $html .= "<tr class='table table-dark'><th>ISBN</th><th>autor</th><th>Tytuł</th><th>Ilość stron</th><th>Cena</th></tr>";
        foreach($books as $b){

            $html .= "<tr>";
            $html .= "<td>{$b->ISBN}</td><td>{$b->author}</td><td>$b->name</td><td>{$b->pages}</td><td>{$b->price}</td>";

            $html .= "</tr>";
        }

       return $html."</table>";
    }
}