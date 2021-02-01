<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw10.css">
    <title>Document</title>
</head>
<body>
    <div class="aricle-list">
     <?php
        require_once "Article.php";
        require_once "RepoArticles.php";
        $a1 = new Article("","Artykuł pierwszy");
        $a2 = new Article("","Artykuł drugi");
        $dir = "articles/";
        $a1->getContentFromFile($dir."art1.txt");
        $a2->getContentFromFile($dir."art2.txt");
        $a2->setStyle("border:solid 1px red;background-color:#23a112;padding: 10px");
        echo $a1;
        echo $a2;
        var_dump(RepoArticles::getAll());
    ?>
    </div>
   
</body>
</html>