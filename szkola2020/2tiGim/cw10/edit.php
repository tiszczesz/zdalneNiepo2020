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
    require_once "RepoArticles.php";
    if(filter_has_var(INPUT_GET,'title')){
        $title = filter_input(INPUT_GET,'title');
        //todo dokonczyc edytowanie
        $article = RepoArticles::getArticleByTitle($title);
        //
        
    }
    ?>
</body>
</html>