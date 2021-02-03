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
    const DIR = "articles";
    $arts = [
        new Article("Pierwszy",""),
        new Article("Drugi","","","","border: solid 1px green; padding:8px;"),
        new Article("Trzeci",""),
        new Article("Czwarty","")
    ];
    $arts[0]->getContentFromFile(DIR."/a1.txt");
    $arts[1]->getContentFromFile(DIR."/a2.txt");
    $arts[2]->getContentFromFile(DIR."/a3.txt");
    $arts[3]->getContentFromFile(DIR."/a4.txt");
    foreach($arts as $a){
        echo ArtHtml::ArticleToDiv($a);
    }
    ?>
    </div>
   
</body>
</html>