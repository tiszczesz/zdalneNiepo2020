<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw11.css">
    <title>Document</title>
</head>
<body>
    <h1>Zbiór artykułów</h1>
    <div class="article-list">
    <?php
    require_once "Article.php";
    require_once "ArtHtml.php";
    require_once "ArtRepo.php";
    
    $arts = ArtRepo::getAll();
    //$arts[count($arts)-1]->setTag("Wycieczka");
    //$arts[count($arts)-1]->setStyle("background-color:yellow;");
   //var_dump($arts);
  // var_dump(explode('|',"|||"));
    foreach($arts as $a){
        echo ArtHtml::ArticleToDiv($a);
    }
    ?>
    </div>
   <div>
       <a href="addNewForm.php">Dodaj nowy artykuł</a>
   </div>
</body>
</html>