<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw11.css">
    <title>Edycja artykułu</title>
</head>
<body>
    <h1>Edycja artykułu</h1>
    <?php
    require_once "ArtRepo.php";
    require_once "ArtHtml.php";
    if(isset($_GET['title'])){
        $title = trim($_GET['title']);
        $article = ArtRepo::getArticleByTitle($title);
        echo ArtHtml::ArticleToForm($article);
    }

    ?>
</body>
</html>