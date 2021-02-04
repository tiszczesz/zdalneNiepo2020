<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw10.css">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "PostToHtml.php";
    $posts = [
        new Post("Pierwszy post","",""),
        new Post("Drugi post","",""),
        new Post("Nowy post","",""),
        new Post("Nowszy post","","")
    ];
    $posts[0]->contentFromFile("posts/post1.txt");
    $posts[1]->contentFromFile("posts/post 3.txt");
    $posts[2]->contentFromFile("posts/post drugi.txt");
    $posts[3]->contentFromFile("posts/post1.txt");
    $posts[2]->setStyle("border:solid black 1px");
    $posts[3]->setTag("Wycieczka");
    foreach($posts as $p){
        echo PostToHtml::postToDiv($p);
    }
    ?>
</body>
</html>