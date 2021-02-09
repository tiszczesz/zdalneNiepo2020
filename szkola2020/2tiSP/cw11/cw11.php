<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cw11.css">
    <title>Document</title>
</head>
<body>
    <div class="conteiner">
         <?php
    require_once "PostToHtml.php";
    require_once "PostRepo.php";
    $posts = PostRepo::getAllPosts();
    $posts[2]->setStyle("border: solid 1px green;background-color:lightgreen;");
    $posts[0]->setTag("Uwaga!");
   // var_dump($posts);
    foreach($posts as $p){
       echo PostToHtml::postToDiv($p);
    }
    
    ?>
    </div>
   <div class='link'>
       <a href="addNew.html">Dodaj nowy post</a>
   </div>
</body>
</html>